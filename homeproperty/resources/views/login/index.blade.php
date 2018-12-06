@extends('layouts.master')

@section('content')


<h3>Login</h3>
<hr>

@if(session()->has('msg'))
  <div class="alert alert-success">{{ session()->get('msg') }}</div> 
@endif

<div class="card">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
    
    <form action="{{route('user.login')}}" method="post">
    @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control {{ $errors->has('email')? 'is-invalid':''}}" id="email" value="{{ old('email')}}" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">{{ $errors->first('email') }}</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control {{ $errors->has('password')? 'is-invalid':''}}" id="password" placeholder="Password">
            <small id="passwordlHelp" class="form-text text-muted">{{ $errors->first('password') }}</small>
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>

@endsection