<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('expenses.index');
    }

    public function create()
    {
        return view('expenses.create');
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
        return view('expenses.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }

    public function trash(){
        return view('expenses.trash');
    }
}
