@extends('layouts.app')
@section('body')
<div class = "container">
<div class = " content-justify-center">
  <div class =" card">
     <div class = "card-header text-center bg bg-primary">
       SIGN IN
     </div>
     <div class = "card-body">
     <form action = "{{url('/login')}}" method = "get" >
        @csrf
  
    <label for="email">Email</label>
    <small class = "text-danger">{{$errors->first('email')}}</small>
    <input type="email" class="form-control" name="email" placeholder="Email"><br><br>

      <label for="password">Password</label>
      <small class = "text-danger">{{$errors->first('password')}}</small>
      <input type = "password" class = "form-control" name = "password" placeholder = "******"><br><br>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
     </div>
  </div>
</div>
</div>
@endsection()