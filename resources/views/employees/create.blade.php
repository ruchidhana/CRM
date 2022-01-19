@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Employee Page</div>
          <div class="card-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
              <form action="{{ url('employees') }}" method="post">
                {!! csrf_field() !!}
                <label>First Name</label></br>
                <input type="text" name="first_name" id="first_name" class="form-control"></br>
                <label>Last Name</label></br>
                <input type="text" name="last_name" id="last_name" class="form-control"></br>
                <label>Phone</label></br>
                <input type="text" name="phone" id="phone" class="form-control"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" class="form-control"></br>
                <select class="form-control" name="company_id" id="company_id">
                  <option value="">Select a company</option>
                  @foreach ($companies as $company)
                      <option value="{{$company->id}}">{{$company->name}}</option>
                  @endforeach
                </select></br>
                <input type="submit" value="Save" class="btn btn-success">
                <a href="/employees" class="btn btn-primary">Back</a>
            </form>
          
          </div>
        </div>
      </div>
  </div>
</div>

@stop