@extends('layouts.app');
@section('body')
<div class = "container">
<div class = " content-justify-center">
  <div class =" card">
     <div class = "card-header text-center">
       Confirm Password because you are about to enter Sensitive Area
     </div>
     <div class = "card-body">
     <form action = "{{url('/confirmPassword')}}" method = "get" >
        @csrf

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