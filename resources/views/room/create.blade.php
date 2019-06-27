@extends('base_layout.master_layout')
@section('content')
      
          
    <div class="col-md-12">
    <!-- <div class="row">
          @if($errors->any())
          <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
           <li>{{$error}}</li>
          @endforeach
          </ul>
          </div>
          @endif -->
        <form method="POST" action="{{route('room.store')}}" enctype="multipart/form-data" >
           {{ csrf_field() }}
            <div class="form-group">
                <label>Room Number</label>
                <input class="form-control" type="number" name="room_number">
                <span class="error">{{ $errors->first('room_number') }}</span>
            </div>
          
            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1"  name="type">
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
                <input class="form-control" type="number" name="price">
                <span class="error">{{ $errors->first('price') }}</span>
            </div>
          

            <div class="form-group">
                <label>Book Type :</label>
                <select class="form-control" id="sel1" name="book_type">
                    <option selected disabled>Choose Book Type :</option>
                    <option value="daily">Daily</option>
                    <option value="monthly">Monthly</option>
                </select>
                <span class="error">{{ $errors->first('book_type') }}</span>
            </div>
          

<<<<<<< HEAD
    <div class="col-md-12">
        <form method="POST" action="{{route('room.store')}}">
            @csrf
            <div class="form-group">
                <label>room number</label>
                <input class="form-control" type="number" name="room_number">
            </div>
            <span class="error">{{$error->first('room_number')}}</span>
            <div class="form-group">
                <label>Type</label>
                <select class="form-group" name="room_type">
                    <option>single</option>
                    <option>double</option>
                    <option>twin</option>
                    <option>cabana</option>
                    <option>superior</option>
                    <option>king</option>
                    <option>junior suite</option>
                    <option></option>
                </select>
            </div>
            <span class="error">{{$error->first('room_type')}}</span>

            <div class="form-group">
                <label>price</label>
                <input class="form-control" type="number" name="price">
            </div>
            <span class="error">{{$error->first('price')}}</span>

            <div class="form-group">
                <label>book type</label>
                <select class=form-group name="book_type">
                    <option>Daily</option>
                    <option>Monthly</option>
                </select>
            </div>
            <span class="error">{{$error->first('book_type')}}</span>

            <div class="form-group">
                <label>Services</label>
                <input class="form-control" name="room_services">
            </div>
            <span class="error">{{$error->first('services')}}</span>

            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                         style="width: 200px; height: 150px; line-height: 150px;"></div>
                    <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden"><input type="file" name="image"> </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                            Remove </a>
                    </div>
                </div>
            </div>
            <span class="error">{{$error->first('image')}}</span>

            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </div>
    </div>
=======
            <div class="form-group">
                <label>Services</label>
                <input class="form-control" name="services">
                <span class="error">{{ $errors->first('services') }}</span>
            </div>
            
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3

            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput"
                         style="width: 200px; height: 150px; line-height: 150px;"></div>
                    <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="hidden"><input type="file" name="image"> </span>
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