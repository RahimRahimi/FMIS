<?php

namespace App\Http\Controllers;

use App\Models\Deputy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DeputyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        return view('offices.deputies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {
            Deputy::create([
                'name' => $request->name,
                'created_by' => Auth::user()->name
            ]);
            return redirect()->back()->with('success', 'Directorate Deputy created successfully.');
        }
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        $deputy = Deputy::findOrFail($id);
        return view('offices.deputies.edit', ['deputy' => $deputy]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if ($validator->passes()) {

            Deputy::findOrFail($id)->update([
                'name' => $request->name,
                'description' => $request->description
            ]);
            return redirect()->back()->with('success', 'Directorate Deputy updated successfully.');
        }
    }

    public function destroy($id)
    {
        Deputy::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Deputy deleted successfully.');
    }

    public function restore($id)
    {
        Deputy::onlyTrashed()->findOrFail($id)->restore();
        return redirect()->back()->with('success', 'Deputy restored successfully.');
    }

    public function forceDelete($id)
    {
        Deputy::onlyTrashed()->findOrFail($id)->forceDelete();
        return redirect()->back()->with('success', 'Deputy permanentally deleted successfully.');
    }
}
