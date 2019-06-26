@extends('base_layout.master_layout')
@section('content')
<div class="row">

    <form method="POST" action="{{action('RoomController@update',$room_number)}}" enctype="multipart/form-data" >
           {{ csrf_field() }}
            
            <div class="form-group">
                <label>Room Number</label>
                <input class="form-control" type="number" value="{{ $room->room_number }}" name="room_number">
                <span class="error">{{ $errors->first('room_number') }}</span>
            </div>
          
            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1" value="{{ $room->type }}"  name="type">
                    <option disabled selected>Choose Room Type</option>
                    <option value="single">single</option>
                    <option value="double">double</option>
                    <option value="twin">twin</option>
                    <option value="cabana">cabana</option>
                    <option value="superior">superior</option>
                    <option value="king">king</option>
                    <option value="junior suite">junior suite</option>
                    <option></option>
                </select>
                <span class="error">{{ $errors->first('type') }}</span>
            </div>
            

            <div class="form-group">
                <label>Price :</label>
                <input class="form-control" type="number" value="{{ $room->price }}" name="price">
                <span class="error">{{ $errors->first('price') }}</span>
            </div>
          

            <div class="form-group">
                <label>Book Type :</label>
                <select class="form-control" id="sel1" value="{{ $room->book_type }}" name="book_type">
                    <option selected disabled>Choose Book Type :</option>
                    <option value="daily">Daily</option>
                    <option value="monthly">Monthly</option>
                </select>
                <span class="error">{{ $errors->first('book_type') }}</span>
            </div>
          

            <div class="form-group">
                <label>Services</label>
                <input class="form-control" name="services">
                <span class="error">{{ $errors->first('services') }}</span>
            </div>
            

            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                         style="width: 200px; height: 150px; line-height: 150px;"></div>
                    <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden"><input type="file" name="image" value="{{url('images', $room->image)}}"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                            Remove </a>
                    </div>
                </div>
                <span class="error">{{ $errors->first('image') }}</span>
            </div>
            
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </div>
    </div>
  </div>
  

   
@endsection