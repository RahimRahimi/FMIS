<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\Deputy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $deputies = Deputy::all();
        return view('offices.administrations.create', ['deputies' => $deputies]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deputy' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
            Administration::create([
                'name' => $request->name,
                'deputy_id' => $request->deputy,
                'created_by' => Auth::user()->name,
                'description' => $request->description
            ]);
            return redirect()->back()->with('success', 'Administration created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $administration = Administration::findOrFail($id);
        $deputies = Deputy::all();
        return view('offices.administrations.edit', ['administration' => $administration, 'deputies' => $deputies]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'deputy' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
            Administration::findOrFail($id)->update([
                'name' => $request->name,
                'deputy_id' => $request->deputy,
                'description' => $request->description
            ]);
            return redirect()->back()->with('success', 'Administration updated successfully.');
        }
    }

    public function destroy($id)
    {
        Administration::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Administration deleted successfully.');
    }

    public function restore($id)
    {
        Administration::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with('success', 'Administration restored successfully.');
    }

    public function forceDelete($id)
    {
        Administration::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back()->with('success', 'Administration permanentally deleted successfully.');
    }
}
