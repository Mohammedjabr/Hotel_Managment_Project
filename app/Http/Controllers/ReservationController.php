<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Reservation;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;



class ReservationController extends Controller
{

    public function index(Request $request)
    {
        $reservations = Reservation::where([]);
        if ($request->has('name') != null) {
            $reservations = $reservations->orWhere('name', '=', $request->name);
        }
        $reservations = $reservations->paginate(5);
        // foreach ($reservations as $reservation) {
        //     $reservation->note = Str::words($reservation->note, 2);
        // }
        return view('reservation.index', compact('reservations'));
    }

    public function create()
    {
        return view('reservation', [
            'ele2' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Reservation Rooms</span>',
            'ele1' => ' <h1 class="heading">Reservation</h1>', 'rooms',
        ]);
    }

    public function store(Request $request)
    {
        request()->validate($this->rules());
        Reservation::create(
            [
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'date_check_in' => $request->date_check_in,
                'date_check_out' => $request->date_check_out,
                'adults' => $request->adults,
                'children' => $request->children,
                'type' => $request->type
            ]
        );
        return redirect()->route('reservation.create')->with('success', 'Success');
        // ->with('success', 'reservation has been created successfully');
    }

    public function show(Request $request)
    {
        // request()->validate($this->rules());
        // $id = DB::table('reservation')->select('id')->latest()->get('id');
        // $rooms = Room::where('is_booked', '=', '0');
        $rooms = DB::table('rooms')->where('is_booked', '=', '0');
        return view(
            'reservation.show',
            compact('rooms'),
            [
                'ele2' => ' <span class="custom-caption text-uppercase text-white d-block  mb-3">Reservation Rooms</span>',
                'ele1' => ' <h1 class="heading">Reservation</h1>', 'rooms',
                // 're_id' => $id,
            ]
        );
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function rules()
    {
        $yesterday = Carbon::yesterday()->toDateString();
        return [
            'name' => ['required', 'min:3'],
            'phone_number' => ['required', 'min:3', 'integer'],
            'email' => ['required', 'min:10', 'string'],
            'date_check_in' => ['required', 'date', 'after:yesterday', 'after:01-01-1950', 'before:date_check_out'],
            'date_check_out' => ['required', 'date', 'after:01-01-1950', 'after:date_check_in'],
            'adults' => ['required', 'integer', 'between:1,5'],
            'children' => ['required', 'integer', 'between:1,5'],
            'type' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'date_check_in' => 'after:The date check in must be a date after yesterday'
        ];
    }
}
