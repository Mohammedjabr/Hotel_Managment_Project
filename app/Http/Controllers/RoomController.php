<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms',['ele1' => '  <h1 class="heading mb-3">Rooms</h1>',
        'ele2' =>' <ul class="custom-breadcrumbs mb-4">
             <ul class="custom-breadcrumbs mb-4">
               <li><a href="index.html">Home</a></li>
               <li>&bullet;</li>
               <li>Rooms</li>
              </ul>'],compact('rooms'));
          }

      public function show(){
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
      //Upload Image  
      if(request()->hasFile('image')){
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/rooms'), $imageName);
        $imagepath = 'images/rooms'.$imageName;  
      }
    
      $request->validate($this->rules() ,$this->messages());
       $room = new Room();
       $room->room_number = $request->input('room_number');
       $room->type = $request->input('type');
       $room->price = $request->input('price');
       $room->book_type = $request->input('book_type');
       $room->services = $request->input('services');
       $room->image = $imagepath;
       if ($request ===TRUE) {
           
       }
       $room->save();
}
     
    //   $room = new Room();
    //   $room->room_number = $request->input('room_number');
    //   $room->type = $request->input('type');
    //   $room->price = $request->input('price');
    //   $room->book_type = $request->input('book_type');
    //   $room->services = $request->input('services');
    //   $room->image = $request->input('image');
    //   $room->save();
      
      //save in database



    
    
    public function edit($room_number)
    {
      $room =Room::find($room_number);
      return view('room.edit',compact('room','room_number'));
     
      

       
        // return view('room.edit');
        // $room=Room::findOrFail($id); 
        // try{
        //     return view('room.edit',compact('room'));
        // }catch(ModelNotFoundException $exciption){
        //     return redirect()->route('room.index')->with('error','Room Not Found');
         
        // } 
        
        
    }
   //error in update
    public function update(Request $request,$room_number)
    {
      $request->validate($this->rules() ,$this->messages());
      $room =Room::find($room_number);
      $room->room_number =$request->get('room_number');
      $room->type =$request->get('type');
      $room->price =$request->get('price');
      $room->book_type =$request->get('book_type');
      $room->services =$request->get('services');
      $room->image ="123456";  //error put image
      $room->save();
      return redirect()->route('room.index')->with('sucess','Data Updated');

      // $request->validate($this->rules() ,$this->messages());
      // $room = Room::find($room_number);
      // $room->room_number = $request->get('room_number');
      // $room->type = $request->get('type');
      // $room->price = $request->get('price');
      // $room->book_type = $request->get('book_type');
      // $room->services = $request->get('services');
      // $room->image = $request->get('fsfsfsf');
      // $room->save();

      // return redirect('/room')->with('success', 'Room has been updated');

    }
     
    public function destroy($room_number){
      $room =Room::find($room_number);
      $room->delete();
      return redirect()->route('room.show')->with('sucess','Data Deleted');
    }


    private function rules(){
        return [
            'room_number' => 'required|max:5|unique:rooms,room_number',
            'type' => 'required',
            'price' =>'required',
            'book_type' =>'required',
            'is_booked' =>'required',
            'services' =>'required',
            
        ];

    }

    private function messages(){
        return [
            'name.required' => 'Name is required',
            'name.max' => 'Room Number smaller than 5',
            'name.unique' => 'Name is already token!!',
            'type.required' => 'Type is required',
            'price.required' => 'Price is required',
            'book_type.required' => 'book_type is required',
            'services.required' => 'Services is required',
            
            
        ];
    }


    

}
