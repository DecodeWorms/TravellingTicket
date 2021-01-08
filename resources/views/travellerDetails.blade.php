@extends('layouts.app')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg bg-primary"><a href = "{{url('/user')}}" class = "mr-5 text-white">HOME</a>
                {{ __('QATAR AIRLINE MY TICKET') }}<a href = "{{url('/logout')}}" class = "ml-5 text-white">LOG OUT</a></div>
                
                @foreach($result as $row)
               <div class="card-body text-center">
               <label for = "firstName" class = "form-label"><b><i>Name : {{$row->name}}</b></i></label><br><br>
               <label for = "email" class = "form-label"><b><i>Email : {{$row->email}}</b></i></label><br><br>
               <label for = "depatureCountry" class = "form-label"><b><i>Depature Country : {{$row->national}}</b></i></label><br><br>
               <label for = "arrivalCountry" class = "form-label"><b><i>Arrival Country : {{$row->tickets->country}}</b></i></label><br><br>
               <label for = "class" class = "form-label"><b><i>Depature Date :{{$row->tickets->depature_date}}</b></i></label><br><br>
               <label for = "gender" class = "form-label"><b><i>Arrival Date :{{$row->tickets->arrival_date}}</b></i></label><br><br>
               @endforeach()

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
