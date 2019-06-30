@extends('base_layout.master_layout')
@section('content')



<div class="col-md-12">
    <!-- <div class="col-md-9">
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            {{session()->get('error')}}
        </div>
        @endif

        @if(session()->has('sucess'))
        <div class="alert alert-sucess" role="alert">
            {{session()->get('sucess')}}
        </div>
        @endif
    </div> -->

    <form method="POST" action="{{action('EmployeeController@update',$id)}}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label>Name :</label>
            <input class="form-control" type="text" name="name" value="{{ $employee->name }}">
            <span class="error">{{ $errors->first('name') }}</span>
        </div>


        <div class="form-group">
            <label>Password :</label>
            <input class="form-control" type="text" name="password" value=" {{ $employee->password }} ">
            <span class="error">{{ $errors->first('password') }}</span>
        </div>

       

        <div class="form-group">
            <label>Phone Number :</label>
            <input class="form-control" type="text" name="phone_number" value=" {{ $employee->phone_number }}">
            <span class="error">{{ $errors->first('phone_number') }}</span>
        </div>

        <div class="form-group">
            <label>Address :</label>
            <input class="form-control" type="text" name="address" value="{{ $employee->address }}">
            <span class="error">{{ $errors->first('address') }}</span>
        </div>


        <div class="form-group">
            <label>Date of Birth :</label>
            <input class="form-control" type="text" name="DoB" value=" {{ $employee->DoB }} ">
            <span class="error">{{ $errors->first('DoB') }}</span>
        </div>


        <div class="form-group">
            <label>Salary :</label>
            <input class="form-control" type="text" name="salary" value=" {{ $employee->salary }} ">
            <span class="error">{{ $errors->first('salary') }}</span>
        </div>

        <!-- <div class="form-group">
                <label>Works Days :</label>
                <input class="form-control" type="text" name="work_days" value=" {{ $employee->work_days }} ">
                <span class="error">{{ $errors->first('work_days') }}</span>
            </div> -->


        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit">
            <input class="btn btn-danger" type="button" name="cancel" value="Cancel">
        </div>
    </form>
</div>
</div>
</div>
@endsection