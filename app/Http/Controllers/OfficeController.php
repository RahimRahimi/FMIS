<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\Deputy;
use App\Models\Person;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $people = Person::all();
        $deputies = Deputy::with('administrations')->get();
        $administrations = Administration::all();
        return view('offices.index', ['people' => $people, 'deputies' => $deputies, 'administrations' => $administrations]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }

    public function trash()
    {
        $deputies = Deputy::with('administrations')->onlyTrashed()->get();
        $administrations = Administration::with('deputy')->onlyTrashed()->get();
        return view('offices.trash', ['deputies' => $deputies, 'administrations' => $administrations]);
    }
}
