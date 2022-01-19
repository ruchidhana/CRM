@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Company Details</div>
        <div class="card-body">
        
              <div class="card-body">
              <p class="card-text">Name : {{ $company->name }}</p>
              <p class="card-text">Email : {{ $company->email }}</p>
              <p class="card-text">Website : {{ $company->website }}</p>
        </div>
            
        <a href="/companies" class="btn btn-primary">Back</a>
        
        
        </div>
      </div>
    </div>
  </div>
</div>
@endsection