<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Validation\Rule;

class HotelController extends Controller
{
    public function index()
    {

        return view('index', [
            'ele1' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>',
            'ele2' => ' <h1 class="heading">A Best Place To Stay</h1>'
        ]);
=======
use App\Room;
class HotelController extends Controller
{
    public function index()//show index website page
    {
        $rooms = Room::all();
        return view('index', ['ele1' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Welcome To 5 <span class="fa fa-star text-primary"></span>   Hotel</span>',
                             'ele2' =>' <h1 class="heading">A Best Place To Stay</h1>'],compact('rooms'));
    }
    public function index2()//show index control panel page
    {

        return view('indexcontrol');
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
    }

    public function create()
    {
        return view('hotel.create');
    }

    public function store(Request $request)
    {
<<<<<<< HEAD
        $size = Hotel::count();
        if ($size == 0) {
            request()->validate($this->rules());
            Hotel::create(
                [
                    'name' => $request->hotel_name,
                    'phone_number' => $request->hotel_phone_number,
                    'address' => $request->hotel_address,
                    'number_of_rooms' => $request->number_of_rooms,
                    'hotel_stars' => $request->hotel_stars,
                    'hotel_services' => $request->hotel_services
                ]
            );

            return redirect('control/hotel/create')->with('success','hotel has been created successfully');
        } else {
            return view('hotel.create')->with('success','Hotel has been created');
        }
    }

    public function edit()
    {
        try {
            $hotel = Hotel::all()->toArray()['0'];
            return view('hotel.edit', compact('hotel'));
        } catch (ModelNotFoundException $exception) {
            return redirect()->route('hotel.index');
        }
    }

    public function update(Request $request)
    {
        $id = Hotel::first(['id']);
        $hotel = Hotel::findOrFail($id)->first()->fill(request()->validate($this->rules()))->save();
        return redirect('control/hotel/edit')->with('success','The hotel has been updated');

    }

    public function rules()
    {
        return [
            'name' => ['required', 'min:3'],
            'phone_number' => ['required', 'min:3','integer'],
            'address' => ['required', 'min:3', 'string'],
            'number_of_rooms' => ['required', 'min:1', 'integer'],
            'hotel_stars' => ['required', 'min:1'],
            'hotel_services' => ['required', 'min:3', 'max:255']
        ];
=======
        $hotel = Hotel::create(
            [
                'name' => $request->hotel_name,
                'phone_number' => $request->hotel_phone_number,
                'address' => $request->hotel_address,
                'number_of_rooms' => $request->room_number,
                'hotel_stars' => $request->hotel_star,
                'hotel_services' => $request->hotel_services
            ]
        );

        $success = session('success', 'hotel has been created successfully');
        return view('hotel.create', compact('success'));
    }

    public function edit($id)
    {
        try {
            $hotel = Hotel::findOrFail($id);
            return view('hotel.edit', compact('hotel'));
        }catch (ModelNotFoundException $exception){
            return redirect()->route('hotel.index');
        }

    }

    public function update(Request $request,$id)
    {
        dd('dddd');
        $id = $request->id;
        $hotel = Hotel::findOrFail($id,
            [
                'name' => $request->hotel_name,
                'phone_number' => $request->hotel_phone_number,
                'address' => $request->hotel_address,
                'number_of_rooms' => $request->room_number,
                'hotel_stars' => $request->hotel_star,
                'hotel_services' => $request->hotel_services
            ]
        );
        return view('hotel.edit', compact('hotel'));
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
    }
}
