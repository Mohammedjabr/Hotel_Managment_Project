@extends('base_layout.master_layout')

@section('content')
<div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('hotel.update')}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Hotel name:</label>
                <input type="text" class="form-control" name="name" value="{{$hotel['name']}}">
            </div>
            <div class="form-group">
                <label>Hotel phone number:</label>
                <input type="text" class="form-control" name="phone_number" value="{{$hotel['phone_number']}}">
            </div>
            <div class="form-group">
                <label>Hotel Address:</label>
                <input type="text" class="form-control" name="address" value="{{$hotel['address']}}">
            </div>
            <div class="form-group">
                <label>number of Rooms:</label>
                <input type="text" class="form-control" name="number_of_rooms" value="{{$hotel['number_of_rooms']}}">
            </div>
            <div class="form-group ">
                <label>Stars number:</label>
                <select class="form-control" name="hotel_stars">
                    <option {{$hotel['hotel_stars'] == '1' ? 'selected' : '' }}>1</option>
                    <option {{$hotel['hotel_stars'] == '2' ? 'selected' : '' }}>2</option>
                    <option {{$hotel['hotel_stars'] == '3' ? 'selected' : '' }}>3</option>
                    <option {{$hotel['hotel_stars'] == '4' ? 'selected' : '' }}>4</option>
                    <option {{$hotel['hotel_stars'] == '5' ? 'selected' : '' }}>5</option>
                </select>
            </div>
            <div class="form-group">
                <label>Services :</label>
                <input type="text" class="form-control" name="hotel_services" value="{{$hotel['hotel_services']}}">
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit">
                <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
            </div>
        </form>
    </div>
</div>
@if($errors->any())
<div class="col-md-12 alert alert-danger">
    @foreach($errors->all() as $error)
    <li>{{$error}} </li>
    @endforeach
</div>
@endif
@endsection 