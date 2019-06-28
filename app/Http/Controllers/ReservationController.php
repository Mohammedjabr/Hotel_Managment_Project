<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Room;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{

    public function index()
    {
        return view('reservation', [
            'ele1' => ' <h1 class="heading mb-3">Reservation Form</h1>',
            'ele2' => ' <ul class="custom-breadcrumbs mb-4">
                                    <li><a href="/hotel">Home</a></li>
                                    <li>&bullet;</li>
                                    <li>RESERVATION</li>
                                    </ul>'
        ]);
    }

    public function create()
    {
        $today = Carbon::today()->toDateString();
        dd($today);
        return view('reservation.create', compact('today'));
    }

    public function store(Request $request)
    {
        Reservation::create('reservations', request()->validate($this->rules()){
            [
                'name' => $request->name,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'date_check_in' => $request->date_check_in,
                'date_check_out' => $request->date_check_out,
                'adults' => $request->adults_number,
                'adults' => $request->children_number,
                'notes' => $request->notes
            ]});
        return redirect('reservation')->with('success', 'reservation has been created successfully');
    }

    public function show(Request $request)
    {
        request()->validate($this->rules());
        // $rooms = Room::where('is_booked', '=', '0');
        $rooms = DB::table('rooms')->where('is_booked','=','0');
        return view(
            'reservation.show',compact('rooms'),
            [
                'ele1' => '',
                'ele2' => ''
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
            'date_check_in' => ['required', 'after:$yesterday', 'before:date_check_out'],
            'date_check_out' => ['required', 'after:date_check_in'],
        ];
    }

    public function messages()
    {
        return [
            'date_check_in' => 'after:The date check in must be a date after yesterday'
        ];
    }
}
