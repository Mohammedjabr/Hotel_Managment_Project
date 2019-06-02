<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\User;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(){

        return view('index', ['ele1' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>',
                             'ele2' =>' <h1 class="heading">A Best Place To Stay</h1>']);
    }

    public function create(){
        return view('hotel.create');
    }

    public function store(Request $request){
        
        $hotel = Hotel::create([
            'name' => $request->hotel_name,
            'phone_number' => $request->hotel_phone_number,
            'address' => $request->hotel_address,
            'number_of_rooms' => $request->room_number,
            'number_of_employees' => $request->employee_number,
            'number_of_customers' => $request->customer_number,
            'hotel_stars' => $request->hotel_star,
            'hotel_services' => $request->hotel_services
        ]
        );
      
    }
}
