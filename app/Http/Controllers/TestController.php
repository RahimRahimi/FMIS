<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function test()
    {
        return view('test');
    }

    public function testPost(Request $request)
    {
        return $request->all();
    }

    public function test2()
    {
        return view('test2');
    }
}
