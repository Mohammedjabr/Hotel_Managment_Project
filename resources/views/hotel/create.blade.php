@extends('base_layout.master_layout')


@section('content')
<<<<<<< HEAD

<div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('hotel.store')}}">
            @csrf
            <div class="form-group">
                <label>Hotel name:</label>
                <input type="text" class="form-control" name="hotel_name" value="{{old('hotel_name')}}"require>
            </div>
            <div class="form-group">
                <label>Hotel phone number:</label>
                <input type="text" class="form-control" name="hotel_phone_number" value="{{old('hotel_phone_number')}}"require>
            </div>
            <div class="form-group">
                <label>Hotel Address:</label>
                <input type="text" class="form-control" name="hotel_address" value="{{old('hotel_address')}}"require>
            </div>
            <div class="form-group">
                <label>Room number:</label>
                <input type="text" class="form-control" name="number_of_rooms" value="{{old('number_of_rooms')}}"require>
            </div>
            <div class="form-group " >
                <label>Stars number:</label>
                <select class="form-control" name="hotel_stars" >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Services :</label>
                <input type="text" class="form-control" name="hotel_services" value="{{old('hotel_name')}}"require>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
=======
    <div class="col-md-12">
        <div class="row">
            <form method="POST" action="{{route('hotel.store')}}">
                @csrf
                <div class="form-group">
                    <label>Hotel name:</label>
                    <input type="text" class="form-control" name="hotel_name">
                </div>
                <div class="form-group">
                    <label>Hotel phone number:</label>
                    <input type="text" class="form-control" name="hotel_phone_number">
                </div>
                <div class="form-group">
                    <label>Hotel Address:</label>
                    <input type="text" class="form-control" name="hotel_address">
                </div>
                <div class="form-group">
                    <label>Room number:</label>
                    <input type="number" class="form-control" name="room_number">
                </div>
                <div class="form-group">
                    <label>Stars number:</label>
                    <input type="text" class="form-control" name="hotel_star">
                </div>
                <div class="form-group">
                    <label>Services :</label>
                    <input type="text" class="form-control" name="hotel_services">
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit">
                    <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
                </div>
            </form>
        </div>
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
    </div>

<<<<<<< HEAD
@if($errors->any())
<div class="col-md-12 alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}} </li>
    @endforeach
</div>
@endif
@endsection
=======
@endsection
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
