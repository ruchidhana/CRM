@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Employees Details</div>
        <div class="card-body">
        
              <div class="card-body">
              <p class="card-text">First Name : {{ $employee->first_name }}</p>
              <p class="card-text">Last Name : {{ $employee->last_name }}</p>
              <p class="card-text">Phone : {{ $employee->phone }}</p>
              <p class="card-text">Email : {{ $employee->email }}</p>
              <p class="card-text">Company Name : {{ $employee->company->name }}</p>
        </div>
            
        <a href="/employees" class="btn btn-primary">Back</a>
        
        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection