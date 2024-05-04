<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with('roles')->get();
        return view('access_control.users.index', ['users' => $users]);
    }

    public function create()
    {
        $roles = Role::all();
        return view('access_control.users.create', ['roles' => $roles]);
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed', // Password confirmation validation
                'roles' => 'required'
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
            if ($validator->passes()) {
                if (!is_null($request->image)) {
                    $imageName = time() . '.' . $request->image->extension();
                    $request->image->move(public_path('images/UserImages'), $imageName);
                } else if (is_null($request->image)) {
                    $imageName = 'no_image.png';
                }
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'image' => $imageName
                ]);

                foreach ($request->roles as $role) {
                    if (!$user->roles->contains($role)) {
                        $user->roles()->attach($role);
                    }
                }
                return redirect()->back()->with('success', 'User created successfully.');
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th);
        }
    }

    public function show(string $id)
    {
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $user_roles = $user->roles->pluck('id')->toArray();
        $roles = Role::all();
        return view('access_control.users.edit', ['user' => $user, 'roles' => $roles, 'user_roles' => $user_roles]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'roles' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
            $user = User::findOrFail($id);
            $selectedRoles = json_decode($request->input('selectedRoles'), true);
            $selectedRoles = array_map('intval', $selectedRoles);
            $user->roles()->sync($selectedRoles);
            // return redirect()->route('users.edit', $id)->with('success', 'User roles updated successfully.');
            return redirect()->back()->with('success', 'User roles updated successfully.');
        }
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function profile()
    {
        return view('access_control.users.profile');
    }

    public function trash()
    {
        $users = User::onlyTrashed()->get();
        return view('access_control.users.trash', ['users' => $users]);
    }

    public function forceDelete($id)
    {
        User::onlyTrashed()->find($id)->forceDelete();
        return redirect()->back()->with('success', 'User permanentally deleted successfully.');
    }

    public function restore($id)
    {
        User::onlyTrashed()->find($id)->restore();
        return redirect()->back()->with('success', 'User restored successfully.');
    }
}
