@extends('layouts.app')

@section('content')
<h1>Booking </h1>
@if(count($prooms) > 0)
        @foreach($prooms as $proom)
        <div class="well">
            <h3><a href="prooms/{{$proom->id}}">{{$proom->guestname}}</a></h3>
         

        </div>
        @endforeach
    @else
        <p>no posts found</p>
    @endif


    
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th >Room Number</th>
        <th>Room Name</th>
        <th>Room Description</th>
        <th>Max Occupancy</th>
        <th>edit description</th>
        <th>Delete</th>
        
        
        </tr>
    </thead>
        @if(count($prooms) > 0)
        @foreach($prooms as $proom)
        <tr>
       
       
        <td>{{$proom->id}}</td>
        <td>{{$proom->guestname}}</td>
        
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
        </tr>
        @endforeach
       </table>
       @endif
       @endsection