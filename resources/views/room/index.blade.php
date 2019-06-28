@extends('base_layout.master_layout')
@section('content')
<div class="row">
  <div class="col-md-12 ">
    <!-- BEGIN SAMPLE FORM PORTLET-->
    <div class="portlet light bordered">
      <div class="portlet-title">
        <div class="caption font-red-sunglo">
          <i class="icon-settings font-red-sunglo"></i>
          <span class="caption-subject bold uppercase"> Search</span>
        </div>
      </div>
      <div class="portlet-body form">
        <form role="form" action="" method="GET">
          @csrf
          <div class="form-body">
            <div class="form-group form-md-line-input">
              <input type="text" class="form-control" id="form_control_1" value="{{app('request')->input('name')}}" name="name">
              <label for="form_control_1">Enter room name</label>
              <span class="error">{{ $errors->first('room_name') }}</span>
            </div>
          </div>
          <div class="form-actions noborder">
            <button type="submit" class="btn blue">Submit</button>
            <a href="{{route('room.index')}}" class="btn btn-default">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="row">
  @if($message = Session::get('sucess'))
  <div class="alert alert-success">
    <p>{{ $message }}</p>
  </div>
  @endif
  <div class="col-md-12">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Show Rooms</h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-condensed flip-content">
          <thead>
            <tr>
              <th>Room NAme</th>
              <th>Type</th>
              <th>Price</th>
              <th>Book Type</th>
              <th>Note</th>
              <th>Edit</th>
              <th>Delete</th>

            </tr>
          </thead>
          <tbody>
            @foreach($rooms as $room)
            <tr>
              <td>{{$room->room_name}}</td>
              <td>{{$room->type}}</td>
              <td>{{$room->price}}$</td>
              <td>{{$room->book_type}}</td>
              <td>{{$room->note}}</td>
              <td><button class="btn btn-success"><a href="{{route('room.edit',['id'=>$room->id])}}">Edit</a></button> </td>
              <td>
                <a type="submit" class="btn btn-danger remove-room" data-value="{{($room->id)}}" data-name="{{$room->room_name}}">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="col-md-12">
          {{$rooms->links()}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
  $('.remove-room').click(function() {
    var id = $(this).data('value')
    var name = $(this).data('name')
    console.clear()
    console.log(id)
    swal({
        title: "Are you sure?",
        text: "Do you want to delete" + name + " room ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
      },
      function() {
        window.location = '{{route('room.destroy')}}/' + id
        swal("Deleted!", "", "success");
      });
  })
</script>
@endsection