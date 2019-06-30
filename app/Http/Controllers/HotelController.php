<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Room;

class HotelController extends Controller
{
    public function index() //show index website page
    {
        $rooms = Room::all();
        return view('index', [
            'ele1' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>',
            'ele2' => ' <h1 class="heading">A Best Place To Stay</h1>'
        ], compact('rooms'));
    }
    public function index2() //show index control panel page
    {

        return view('indexcontrol');
    }

    public function create()
    {
        return view('hotel.create');
    }

    public function room()
    {
        $rooms = Room::all();

        return view(
            'room',
            compact('rooms'),
            [
                'ele1' => ' <h1 class="heading">Rooms</h1>',
                'ele2' => '<span class="custom-caption text-uppercase text-white d-block  mb-3">room</span>'
            ]
        );
    }

    public function reservation()
    {
        return view('reservation', [
            'ele1' => ' <h1 class="heading">Reservation</h1>',
            'ele2' => '<span class="custom-caption text-uppercase text-white d-block  mb-3">reservation</span>'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'ele1' => ' <h1 class="heading">Contact</h1>',
            'ele2' => '<span class="custom-caption text-uppercase text-white d-block  mb-3">Contact</span>',
        ]);
    }
}
