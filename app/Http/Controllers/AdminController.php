<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    
public function index()
{
    return view('login');
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        $credendinals = $request->only('name','password');
        if(! Auth::guard('employee')->attempt($credendinals)){
            return back()->withErrors([
                'message' => 'Wrong Email or Password !'
            ]);

        }

        return redirect()->route('employee.create');
    }

}
