@extends('base_layout2.master_layout')
@section('body')
<<<<<<< HEAD
<a class="mouse smoothscroll" href="#next">
  <div class="mouse-icon">
    <span class="mouse-wheel"></span>
  </div>
</a>
</section>
<!-- END section -->
=======
<<<<<<< HEAD
<<<<<<< HEAD
<section class="site-hero inner-page overlay" style="background-image: url(/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade">
            <h1 class="heading mb-3">Reservation Form</h1>
            <ul class="custom-breadcrumbs mb-4">
              <li><a href="{{route('hotel.index')}}">Home</a></li>
              <li>&bullet;</li>
              <li>Reservation</li>
            </ul>
          </div>
        </div>
      </div>

      <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
          <span class="mouse-wheel"></span>
        </div>
      </a>
    </section>
    <!-- END section -->


=======
>>>>>>> 6d5855a55afb8aca9225b18f9dc9b71862f52314
=======

>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
>>>>>>> develop
<section class="section contact-section" id="next">
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
        <form action="{{route('reservation.show')}}" method="post" class="bg-white p-md-5 p-4 mb-5 border">
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
              <input type="text" id="checkin_date" autocomplete="off" class="form-control" name="date_check_in" value="{{old('date_check_in')}}">
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
              <input type="text" id="checkout_date" autocomplete="off" class="form-control" name="date_check_out" value="{{old('date_check_out')}}">
            </div>
          </div>
          <div class="row">

            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Number of persons</label>
              <input type="text" class="form-control" placeholder="from 1 - 5" name="number_of_person" validate value="{{old('number_of_person')}}">
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