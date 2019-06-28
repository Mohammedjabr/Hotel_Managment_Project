@extends('base_layout.master_layout')
@section('content')
<div class="row">
    <div class="col-md-12 ">
        <!-- BEGIN SAMPLE FORM PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-red-sunglo">
                    <i class="icon-settings font-red-sunglo"></i>
                    <span class="caption-subject bold uppercase"> Edit</span>
                </div>
            </div>
            <div class="portlet-body form">
                <form role="form" action="{{route('room.update',['id'=>$room->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-body">
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" id="form_control_1" value="{{$room->name}}" name="name">
                            <label for="form_control_1">Room name </label>
                            <span class="error">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="form_control_1">Room Type</label>
                            <select class="form-control" id="sel1" value="{{ $room->type }}" name="type">
                                <option {{ $room->type == 'single' ? 'selected' : '' }}>Single</option>
                                <option {{ $room->type == 'double' ? 'selected' : '' }}>Double</option>
                                <option {{ $room->type == 'twin' ? 'selected' : '' }}>Twin</option>
                                <option {{ $room->type == 'king' ? 'selected' : '' }}>King</option>
                            </select>
                        </div>
                        <div class="form-group form-md-line-input">
                            <input type="text" class="form-control" id="form_control_1" value="{{$room->price}}" name="price">
                            <label for="form_control_1">Price </label>
                            <span class="error">{{ $errors->first('price') }}</span>
                        </div>

                        <div class="form-group form-md-line-input">
                            <label for="form_control_1">Book type</label>
                            <select class="form-control" id="sel1" value="{{ $room->book_type }}" name="book_type">
                                <option {{ $room->book_type == 'daily' ? 'selected' : '' }}>Daily</option>
                                <option {{ $room->book_type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                            </select>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="form_control_1">Is Booked</label>
                            <select class="form-control" id="sel1" value="{{ $room->is_booked }}" name="is_booked">
                                <option {{ $room->is_booked == 'true' ? 'selected' : '' }}>True</option>
                                <option {{ $room->is_booked == 'false' ? 'selected' : '' }}>False</option>
                            </select>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="form_control_1">Notes</label>
                            <input class="form-control" name="note" value="{{$room->note}}">
                            <span class="error">{{ $errors->first('note') }}</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                                <img src="{{asset($room->image)}}">
                            </div>
                            <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="hidden"><input type="file" name="image" > </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                            </div>
                        </div>
                        <span class="error">{{ $errors->first('image') }}</span>
                    </div>
                    <div class="form-actions noborder">
                        <button type="submit" class="btn blue">Submit</button>
                        <button type="cancel" class="btn default">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="row">
            <div class="portlet light bordered">
                <form method="POST" action="{{route('room.update')}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <!-- <div class="form-group">
                    <label>Room name</label>
                    <input class="form-control" type="text" value="{{ $room->room_name }}" name="room_name">
                    <span class="error">{{ $errors->first('room_name') }}</span>
                </div> -->
<!-- <div class="form-group">
                        <label>Type :</label>
                        <select class="form-control" id="sel1" value="{{ $room->type }}" name="type">
                            <option disabled selected>Choose Room Type</option>
                            <option {{ $room->type == 'single' ? 'selected' : '' }}>Single</option>
                            <option {{ $room->type == 'double' ? 'selected' : '' }}>Double</option>
                            <option {{ $room->type == 'twin' ? 'selected' : '' }}>Twin</option>
                            <option {{ $room->type == 'king' ? 'selected' : '' }}>King</option>
                        </select>
                        <span class="error">{{ $errors->first('type') }}</span>
                    </div> -->
<!-- <div class="form-group">
                        <label>Price :</label>
                        <input class="form-control" type="text" value="{{ $room->price }}" name="price">
                        <span class="error">{{ $errors->first('price') }}</span>
                    </div>
                    <div class="form-group">
                        <label>Book Type :</label>
                        <select class="form-control" id="sel1" value="{{ $room->book_type }}" name="book_type">
                            <option selected disabled>Choose Book Type :</option>
                            <option {{ $room->book_type == 'daily' ? 'selected' : '' }}>Daily</option>
                            <option {{ $room->book_type == 'monthly' ? 'selected' : '' }}>Monthly</option>
                        </select>
                        <span class="error">{{ $errors->first('book_type') }}</span>
                    </div> -->
<!-- <div class="form-group">
                        <label>Notes</label>
                        <input class="form-control" name="note" value="{{$room->note}}">
                        <span class="error">{{ $errors->first('note') }}</span>
                    </div> -->

<!-- <div class="form-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;"></div>
                            <div>
                                <span class="btn red btn-outline btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="hidden"><input type="file" name="image" value="{{(public_path($room->image))}}"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                            </div>
                        </div>
                        <span class="error">{{ $errors->first('image') }}</span>
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit">
                        <input class="btn btn-danger" type="button" name="cancel" value="Cancel"> -->
<!-- </div>
                </form> -->

@endsection