@extends('base_layout2.master_layout')
@section('body')
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

            </div>
        </div>
    </section>

@stop