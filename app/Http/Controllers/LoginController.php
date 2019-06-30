<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    public function cheack(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);
        
        return view('indexcontrol');
    }

}
