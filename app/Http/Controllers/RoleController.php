<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Permission, Role, User};
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $roles = Role::with('permissions')->get();
        $permissions = Permission::all();
        return view('access_control.roles.index', ['roles' => $roles, 'permissions' => $permissions]);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('access_control.roles.create', ['permissions' => $permissions]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'permissions' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($validator->passes()) {

            $role = Role::create([
                'name' => $request->name,
                'description' => $request->description
            ]);

            foreach ($request->permissions as $permission) {
                if (!$role->permissions->contains($permission)) {
                    $role->permissions()->attach($permission);
                }
            }
            return redirect()->back()->with('success', 'Role created successfully.');
        }

        return $request->all();
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::findOrFail($id);
        $role_permissions = $role->permissions->pluck('id')->toArray();
        $permissions = Permission::all();
        return view('access_control.roles.edit', ['role' => $role, 'permissions' => $permissions, 'role_permissions' => $role_permissions]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'permissions' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
            $role = Role::findOrFail($id);
            $selectedPermissions = json_decode($request->input('selectedPermissions'), true);
            $selectedPermissions = array_map('intval', $selectedPermissions);
            $role->permissions()->sync($selectedPermissions);
            $role->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
            // return redirect()->route('users.edit', $id)->with('success', 'User roles updated successfully.');
            return redirect()->back()->with('success', 'User role updated successfully.');
        }
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Role deleted successfully.');
    }

    public function trash()
    {
        $roles = Role::onlyTrashed()->get();
        return view('access_control.roles.trash', ['roles' => $roles]);
    }

    public function restore($id)
    {
        Role::onlyTrashed()->find($id)->restore();
        return redirect()->back()->with('success', 'Role restored successfully.');
    }

    public function forceDelete($id)
    {
        Role::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success', 'Role permanentally deleted successfully.');
    }
}
