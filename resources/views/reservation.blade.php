@extends('base_layout2.master_layout')
@section('body')
<section class="section contact-section" id="next">
  <div class="container">
    <div class="row">
      @if(session()->has('success'))
      <div class="alert alert-success">
        {{session()->pull('success')}}
      </div>
      @endif

      <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
        <form action="{{route('reservation.store')}}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
          @csrf
          @method('POST')
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name">Name</label>
              <input type="text" id="name" class="form-control" name="name" value="{{old('name')}}">
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="phone">Phone</label>
              <input type="text" id="phone" class="form-control" name="phone_number" value="{{old('phone_number')}}">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="email">Email</label>
              <input type="email" id="email" class="form-control" name="email" value="{{old('email')}}">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
              <input type="date" autocomplete="off" class="form-control" name="date_check_in" value="{{old('date_check_in')}}">
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
              <input type="date" autocomplete="off" class="form-control" name="date_check_out" value="{{old('date_check_out')}}">
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Adults</label>
              <input type="text" class="form-control" placeholder="from 1 - 5" name="adults" validate value="{{old('adults')}}">
            </div>
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Children</label>
              <input type="text" class="form-control" placeholder="from 1 - 5" name="children" validate value="{{old('children')}}">
            </div>
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Room type</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select id="adults" class="form-control" name="type">
                  <option {{ old('type') == 'single' ? 'selected' : '' }}>Single</option>
                  <option {{ old('type') == 'Double' ? 'selected' : '' }}>Double</option>
                  <option {{ old('type') == 'King' ? 'selected' : '' }}>King</option>
                  <option {{ old('type') == 'Twin' ? 'selected' : '' }}>Twin</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="submit" value="Reserve Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
            </div>
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
  </div>
</section>

@stop