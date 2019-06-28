<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Room;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class RoomController extends Controller
{
  public function index(Request $request)
  {
    $rooms = Room::where([]);
    if ($request->has('name') != null) {
      $rooms = $rooms->orWhere('room_name', '=', $request->name);
    }
    $rooms = $rooms->paginate(5);
    foreach ($rooms as $room) {
      $room->note = Str::words($room->note, 2);
    }
    return view('room.index', compact('rooms'));
  }

  public function show()
  {
    $rooms = Room::paginate(5);

    return view('Room.index', compact('rooms'));
  }

  public function create()
  {
    return view('room.create');
  }

  //error in store
  public function store(Request $request)
  {
    request()->validate([
      'room_name' => ['required', 'unique:rooms,room_name'],
      'type' => ['required'],
      'price' => ['required', 'integer', 'between:20,250'],
      'book_type' => ['required'],
      'note' => ['required'],
      'image' => ['required']
    ]);
    //Upload Image
    $uploadedImage = $request->file('image');
    $imageName = time() . '.' . $uploadedImage->getClientOriginalExtension();
    $direction = public_path('images/rooms');
    $uploadedImage->move($direction, $imageName);
    $imagepath = 'images/rooms/' . $imageName;

    $room = Room::create([
      'room_name' => $request->room_name,
      'type' => $request->type,
      'price' => $request->price,
      'book_type' => $request->book_type,
      'note' => $request->note,
      'image' => $imagepath,
    ]);
    $room_name = $request->room_name;
    return redirect('/room/create')->with('success', 'room ' . $room_name . ' has been created successfully');
  }

  public function edit($id)
  {
    try {
      $room = Room::findOrFail($id);
      return view('room.edit', compact('room'));
    } catch (ModelNotFoundException $exception) {
      return redirect()->route('room.edit')->with('error', 'Room not found');
    }
  }
  //error in update
  public function update(Request $request, $id)
  {
    try {
      $room = Room::findOrFail($id);
      $oldName = $request->room_name;
      $request->validate($this->rules($id), $this->messages());
      if ($request->hasFile('image')) {
        $imagePath = parent::uploadImage($request->file('image'));
        if (File::exists(public_path($room->image))) {
          File::delete(public_path($room->image));
        }
        $room->image = $imagePath;
      }
      $room->room_name = $request->room_name;
      $room->type = $request->type;
      $room->price = $request->price;
      $room->book_type = $request->book_type;
      $room->note = $request->note;
      $room->update();
      return redirect()->route('room.index')->with('success', 'Room' . $oldName . ' has been updated successfully');
    } catch (ModelNotFoundException $exception) {
      return redirect()->route('room.update')->with('error', 'Room not found');
    }
  }

  public function destroy($room_number)
  {
    try {
      $room = Room::findOrFail($room_number);
      $room->delete();
      return redirect()->route('room.index')->with('success', 'Room has been deleted successfully');
    } catch (ModelNotFoundException $exception) {
      return redirect()->route('room.index')->with('error', 'Room not found');
    }
  }



  private function rules($id = null)
  {
    $rules = [

      'type' => ['required'],
      'price' => ['required', 'integer', 'between:20,250'],
      'book_type' => ['required'],
      'is_booked' => ['required'],
      'note' => ['required'],
    ];
    if ($id) {
      $rules['room_name'] = ['required', 'unique:rooms,room_name,' . $id];
    } else {
      $rules['room_name'] = ['required', 'unique:rooms,room_name,'];
      $rules['image'] = ['required', 'image,'];
    }
    return $rules;
  }

  private function messages()
  {
    return [
      'room_name.required' => 'Name is required',
      'room_name.unique' => 'Name is already token!!',
      'type.required' => 'Type is required',
      'price.required' => 'Price is required',
      'book_type.required' => 'book_type is required',
    ];
  }
}
