@extends('base_layout.master_layout')
@section('content')

  
          
    <div class="col-md-12">
    @if($message = Session::get('sucess'))
   <div class="alert alert-success">
    <p>{{ $message }}</p>
   </div>
  @endif   
        <form method="POST" action="{{route('employee.store')}}">
           {{ csrf_field() }}
            <div class="form-group">
                <label>Name :</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                <span class="error">{{ $errors->first('name') }}</span>
            </div>
          

            <div class="form-group">
                <label>Password :</label>
                <input class="form-control" type="text" name="password" value="{{ old('password') }}">
                <span class="error">{{ $errors->first('password') }}</span>
            </div>

            <div class="form-group">
                <label>Type :</label>
                <select class="form-control" id="sel1"  name="type">
                    <option disabled selected>Choose Employee Type</option>
                    <option value="admin">Admin</option>
                    <option value="Employee">employee</option>
                </select>
                <span class="error">{{ $errors->first('type') }}</span>
            </div>

            <div class="form-group">
                <label>Phone Number :</label>
                <input class="form-control" type="number" name="phone_number" value="{{ old('phone_number') }}">
                <span class="error">{{ $errors->first('phone_number') }}</span>
            </div>

            <div class="form-group">
                <label>Address :</label>
                <input class="form-control" type="text" name="address" value="{{ old('address') }}">
                <span class="error">{{ $errors->first('address') }}</span>
            </div>
            

            <div class="form-group">
                <label>Date of Birth :</label>
                <input class="form-control" type="date" name="DoB" value="{{ old('DoB') }}">
                <span class="error">{{ $errors->first('DoB') }}</span>
            </div>
          

            <div class="form-group">
                <label>Salary :</label>
                <input class="form-control" type="number" name="salary" value="{{ old('salary') }}">
                <span class="error">{{ $errors->first('salary') }}</span>
            </div>

            <div class="form-group">
                <label>Works Days :</label>
                <input class="form-control" type="number" name="work_days" value="{{ old('work_days') }}">
                <span class="error">{{ $errors->first('work_days') }}</span>
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