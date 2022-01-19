@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Employees Edit Page</div>
        <div class="card-body">
            
            <form action="{{ url('employees/' .$employee->id) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id" id="id" value="{{$employee->id}}" id="id" />
              <label>First Name</label></br>
                <input type="text" name="first_name" id="first_name" class="form-control" value="{{$employee->first_name}}"></br>
                <label>Last Name</label></br>
                <input type="text" name="last_name" id="last_name" class="form-control" value="{{$employee->last_name}}"></br>
                <label>Phone</label></br>
                <input type="text" name="phone" id="phone" class="form-control" value="{{$employee->phone}}"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" class="form-control" value="{{$employee->email}}"></br>
                <label>Company Name</label></br>
                <select class="form-control" name="company_id" id="company_id">
                  <option value="">Select a company</option>
                  @foreach ($companies as $company)
                      <option value="{{$company->id}}">{{$company->name}}</option>
                  @endforeach
                </select></br>
      
                <input type="submit" value="Update" class="btn btn-success">
              <a href="/employees" class="btn btn-primary">Back</a>
          </form>
        
        </div>
      </div>

    </div>
  </div>
</div>
@stop