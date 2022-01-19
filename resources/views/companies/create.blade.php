@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">Company Page</div>
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
              <form action="{{ url('companies') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Email</label></br>
                <input type="email" name="email" id="email" class="form-control"></br>
                <label>Website</label></br>
                <input type="text" name="website" id="website" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success">
                <a href="/companies" class="btn btn-primary">Back</a>
            </form>
          
          </div>
        </div>
      </div>
  </div>
</div>

@stop