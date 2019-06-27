@extends('base_layout.master_layout')

@section('content')

<div class="col-md-12">
    <form method="POST" action="{{route('reservation.store')}}">
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
        <div class="form_group">
            <label></label>
            <input class="form_control"> 
        </div>
    </form>
</div>

@endsection