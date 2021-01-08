@extends('layouts.app')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center bg bg-primary"><a href = "{{url('/user')}}" class = "mr-5 text-white">HOME</a>
                {{ __('GET UR TICKET TO FLY WORLD WIDE FROM QATAR AIRLINE') }}<a href = "{{url('/logout')}}" class = "ml-5 text-white">LOG OUT</a></div>

                <div class="card-body">

    <form action = "{{url('/makeTicket')}}" method = "post" >
        @csrf
      <label for="departureDate">Departure Date</label>
      <small class = "text-danger">{{$errors->first('departureDate')}}</small>
      <input type="text" class="form-control" name="departureDate" placeholder="Departure Date"><br><br>



    <label for="arrivalDate">Arrival Date</label>
    <small class = "text-danger">{{$errors->first('arrivalDate')}}</small>
    <input type="text" class="form-control" name="arrivalDate" placeholder="Arrival Date"><br><br>

      <label for="country">Country</label>
      <small class = "text-danger">{{$errors->first('country')}}</small>
      <input type = "text" class = "form-control" name = "country" placeholder = "Country"><br><br>

      <label for="hotel">Hotel</label>
      <small class = "text-danger">{{$errors->first('hotel')}}</small>
      <input type = "text" class = "form-control" name = "hotel" placeholder = "hotel"><br><br>

  <button type="submit" class="btn btn-primary">SUBMIT</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
