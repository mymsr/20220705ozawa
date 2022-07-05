<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'gender'   => 'required',
            'email'    => 'required|email',
            'postcode' => 'required|numeric',
            'address'  => 'required',
            'building' => 'nullable',
            'opinion'  => 'required',

        ]);
        return view('confirm');
    }
    public function complete()
    {
        return view('complete');
    }

}
