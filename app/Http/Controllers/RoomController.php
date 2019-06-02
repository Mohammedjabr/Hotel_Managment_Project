<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('rooms', ['ele1' => '  <h1 class="heading mb-3">Rooms</h1>',
        'ele2' => ' <ul class="custom-breadcrumbs mb-4">
        <li><a href="/hotel">Home</a></li>
        <li>&bullet;</li>
        <li>Rooms</li>
        </ul>']);
}
    

    public function create(){
        return view('room.create');
    }

    public function store(Request $request){

        
    }

}
