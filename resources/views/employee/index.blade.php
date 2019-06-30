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
      <h3 class="panel-title">Show Employees</h3>
       </div>
       <div class="panel-body">
       <table class="table table-bordered table-striped table-condensed flip-content">
                 <thead>
                  <tr>
                    <th>Name</th>
                    <th>password</th>
                    <th>Phone Number</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Salary</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
               <tbody>
               @foreach($id as $employee)
                  <tr>
                   <td>{{$employee->name}}</td>
                   <td>{{$employee->password}}</td>
                   <td>{{$employee->phone_number}}</td>
                   <td>{{$employee->DoB}}</td>
                   <td>{{$employee->address}}</td>
                   <td>{{$employee->salary}}</td>
                   <!-- <td>{{$employee->work_days}}</td> -->

                   <td>
                   <a href="{{ action('EmployeeController@edit',$employee['id'])}}"><button class="btn btn-success">Edit</button></a> </td>
                   <td>
                     <form method="post" class="delete_form" action="{{action ('EmployeeController@destroy',
                        $employee['id']) }}">
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
               {{ $id->links() }}
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