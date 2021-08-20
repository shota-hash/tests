<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function post(Request $request)
    {
        $validate_rule = [
            'name' => 'required',
            'email' => 'required|email',
        ];
        $this->validate($request, $validate_rule);
        return view('thanks');
    }
}

