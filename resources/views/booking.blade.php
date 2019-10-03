@extends('layouts.app')

@section('content')
<div class="row">
      <div class="container" style="margin-top: 85px; margin-bottom: 85px;">
            <h1 class="text-center">Bookings</h1> 

    @if(count($bookings)> 0 )
        @foreach($bookings as $booking)
        <div class="card" style="width: 100rem;">
                    <div class="card mt-2 mb-3 green">
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h1>Name:{{$booking->name}}</h1></li>
                    <li class="list-group-item"><h1>Email:{{$booking->email}}</h1></li>
                    <li class="list-group-item"><h1>Booked Time:{{$booking->booked_time}}</h1></li>
                
                    </ul>
        
        @endforeach
    @else
        <p>No bookings found</p>
    @endif
@endsection