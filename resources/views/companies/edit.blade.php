@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">Company Edit Page</div>
        <div class="card-body">
            
            <form action="{{ url('companies/' .$company->id) }}" method="post">
              {!! csrf_field() !!}
              @method("PATCH")
              <input type="hidden" name="id" id="id" value="{{$company->id}}" id="id" />
              <label>Name</label></br>
              <input type="text" name="name" id="name" value="{{$company->name}}" class="form-control"></br>
              <label>Email</label></br>
              <input type="email" name="email" id="email" value="{{$company->email}}" class="form-control"></br>
              <label>Website</label></br>
              <input type="text" name="website" id="website" value="{{$company->website}}" class="form-control"></br>
              <input type="submit" value="Update" class="btn btn-success">
              <a href="/companies" class="btn btn-primary">Back</a>
          </form>
        
        </div>
      </div>

    </div>
  </div>
</div>
@stop