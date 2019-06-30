@extends('base_layout2.master_layout')
@section('body')


<section class="section contact-section" id="next">
    <div class="container">
        @foreach($rooms->get() as $room)

        <div class="row">
            <div class="col-md-12 border" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-6 col-lg-4 aos-init aos-animate border" data-aos="fade-up">
                        <figure class="img-wrap">
                            <a type="submit" href="{{route('reservation.store')}}" class="room btn">
                                <img src="{{(asset($room->image))}}" alt="Free website template" class="img-fluid mb-3">
                            </a>
                        </figure>
                        <div class="p-3 text-center room-info">
                            <h2>{{$room->type}} Room</h2>
                            <span class="text-uppercase letter-spacing-1">{{$room->price}}$ / per night</span>
                        </div>
                    </div>
                    <div class="col-md-6 aos-init aos-animate">
                        <div>
                            <p>{{$room->note}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">
                </div>
            </div>
            @endforeach
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