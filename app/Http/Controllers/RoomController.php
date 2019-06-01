<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('rooms');
    }

    public function create(){
        return view('room.create');
    }

    public function store(Request $request){

        
    }

}
