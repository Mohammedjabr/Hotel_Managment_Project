@extends('base_layout.master_layout')
@section('content')
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
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Book Type</th>
                    <th>Services</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
               <tbody>
               @foreach($rooms as $room)
                  <tr>
                   <td>{{$room->room_number}}</td>
                   <td>{{$room->type}}</td>
                   <td>{{$room->price}}</td>
                   <td>{{$room->book_type}}</td>
                   <td>{{$room->services}}</td>
                   <td><button class="btn btn-success"><a href="{{ action('RoomController@edit',$room['room_number'])}}">Edit</a></button> </td>
                   <td>
                     <form method="post" class="delete_form" action="{{action ('RoomController@destroy',
                     $room['room_number']) }}">
                     {{csrf_field()}}
                     <input type="hidden" name="_method" value="DELETE">
                     <button type="submit" class="btn btn-danger">Delete</button>
                     </form> 
                   </td>
                  </tr>
                 @endforeach
               </tbody>
               </table>
               <div class="col-md-12">
               {{ $rooms->links() }}
               </div> 
          </div>
          </div>
          </div>
</div>
<script>
$(document).ready(function(){
  $('.delete_form').on('submit',function(){
    if (confirm("Are you sure you want To delete it ?")) {
      return true;
    }else{
      return false;
    }
  });
});
</script>

@endsection