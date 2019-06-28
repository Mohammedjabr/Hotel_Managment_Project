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
    <form method="POST" action="{{route('room.store')}}" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div class="form-group">
            <label>Room name</label>
            <input class="form-control" type="text" name="room_name" value="{{old('room_name')}}">
            <span class="error">{{ $errors->first('room_name') }}</span>
        </div>
        <div class="form-group">
            <label>Type :</label>
            <select class="form-control" id="sel1" name="type">
                <option disabled selected>Choose Room Type</option>
                <option {{ old('type') == 'Single' ? 'selected' : '' }}>Single</option>
                <option {{ old('type') == 'Double' ? 'selected' : '' }}>Double</option>
                <option {{ old('type') == 'Twin' ? 'selected' : '' }}>Twin</option>
                <option {{ old('type') == 'King' ? 'selected' : '' }}>King</option>
            </select>
            <span class="error">{{ $errors->first('type') }}</span>
        </div>
        <div class="form-group">
            <label>Price :</label>
            <input class="form-control" type="text" name="price" value="{{old('price')}}">
            <span class="error">{{ $errors->first('price') }}</span>
        </div>
        <div class="form-group">
            <label>Book Type :</label>
            <select class="form-control" id="sel1" name="book_type">
                <option selected disabled>Choose Book Type :</option>
                <option {{ old('book_type') == 'Daily' ? 'selected' : '' }}>Daily</option>
                <option {{ old('book_type') == 'Monthly' ? 'selected' : '' }}>Monthly</option>
            </select>
            <span class="error">{{ $errors->first('book_type') }}</span>
        </div>
        <div class="form-group">
            <label>Note</label>
            <input type="text" class="form-control" name="note" value="{{old('note')}}">
            <span class="error">{{ $errors->first('note') }}</span>
        </div>
        <div class="form-group">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px; line-height: 150px;">
                <img src="{{(old('image'))}}">
            </div>
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