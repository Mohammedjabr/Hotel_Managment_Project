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
        return view('rooms', [
            'ele1' => ' <h1 class="heading">Rooms</h1>',
            'ele2' => '<span class="custom-caption text-uppercase text-white d-block  mb-3">room</span>'
        ]);
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



    // public function store(Request $request)
    // {
    //     $size = Hotel::count();
    //     if ($size == 0) {
    //         request()->validate($this->rules());
    //         Hotel::create(
    //             [
    //                   'name' => $request->hotel_name,
    //                   'phone_number' => $request->hotel_phone_number,
    //                   'address' => $request->hotel_address,
    //                  'nu mber_of_rooms' => $request->number_of_rooms,
    //                   'hotel_stars' => $request->hotel_stars,
    //                  'h otel_services' => $request->hotel_services
    //             ]
    //         );

    //         retu rn redi r ect(' c ontrol /hotel/cre ate')-> wit h('success','hotel has been cre ated successfully');
    //     } else {
    //          r e turn v iew('hotel .create ')- >with('success','Ho tel has been created');
    //     }
    // }

    // public function edit()
    // {
    //     try {
    //         $hotel = Hotel : :all()->toArray()['0'];
    //            ret urn view('ho tel.e dit', compact('hotel'));
    //     } catch (ModelNotFoundException $exception) {
    //         return  redi r ect() ->route('hotel.index');
    //     }
    // }

    // public function update(Request $request)
    // {
    //     $ id  = Hotel::first(['id']);
    //     $hotel = Hotel::findOrFail($id)->first()->fill(request()->validate($this->rules()))->save();
    //      retu r n red i rect ('control/ hotel/e dit ')->with('success','Th e hotel has been updated');

    // }

    // public function rules()
    // {
    //     r etur n [
     //           'nam e ' => ['required', 'm in:3'],
     //          'pho ne_n umbe r ' = > ['req uired', 'min:3','int eger'], 
    //           'ad dres s ' =>  ['req uired', 'min:3', 'st ring'],
    //           'number _of_ room s ' =>  ['requ ired', 'min:1', 'int eger'],
     //          'ho tel_ star s ' => ['required', 'm in:1'],
    //           'hotel _ser vice s ' =>  ['r equired', 'min:3', 'max:255']
    //     ];
    // }
}

