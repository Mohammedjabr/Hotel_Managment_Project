@extends('base_layout2.master_layout')
@section('body')
<<<<<<< HEAD
    <section class="site-hero inner-page overlay" style="background-image: url(/images/hero_4.jpg)"
             data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row site-hero-inner justify-content-center align-items-center">
                <div class="col-md-10 text-center" data-aos="fade">
                    <h1 class="heading mb-3">Rooms</h1>
                    <ul class="custom-breadcrumbs mb-4">
                        <li><a href="{{route('rooms.index')}}">Home</a></li>
                        <li>&bullet;</li>
                        <li>Rooms</li>
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

    <section class="section">
        <div class="container">

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Single Room</h2>
                            <span class="text-uppercase letter-spacing-1">90$ / per night</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Double Room</h2>
                            <span class="text-uppercase letter-spacing-1">120$ / per night</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Triple Room</h2>
                            <span class="text-uppercase letter-spacing-1">250$ / per night</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Quad Room</h2>
                            <span class="text-uppercase letter-spacing-1">90$ / per night</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_2.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>King Room</h2>
                            <span class="text-uppercase letter-spacing-1">120$ / per night</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="/images/img_3.jpg" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>Twin Room</h2>
                            <span class="text-uppercase letter-spacing-1">250$ / per night</span>
                        </div>
                    </a>
                </div>

=======
    <section class="section">
        <div class="container">
            <div class="row">
            @foreach($rooms as $room)
             
                <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
                    <a href="#" class="room">
                        <figure class="img-wrap">
                            <img src="{{asset($room->image)}}" alt="Free website template" class="img-fluid mb-3">
                        </figure>
                        <div class="p-3 text-uppercase text-center room-info">
                            <h2>{{$room->type}}</h2>
                            <span class="text-uppercase letter-spacing-1">Services : {{$room->services}}<br>{{$room->price}} Per night</span>
                        </div>
                    </a>
                 </div>
                    @endforeach
                </div>

>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
            </div>
        </div>
    </section>

@stop