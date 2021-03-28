@extends('layouts.app')

@section('content')
<h1>Booking </h1>
<h1><a class="nav-link" href={{ url('prooms/create')}}>Create Booking</a><h1>
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
       
            <td>{{$proom->book_id}}</td>
        <td>{{$proom->id}}</td>
        <td>{{$proom->guestname}}</td>
        
        
        <td>
            {!!Form::open(['action'=> ['ProomsController@destroy',$proom->book_id, 'method' => 'POST']])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
        {!!form::close()!!}

        </td>
        </tr>
        @endforeach
       </table>
       @endif
       @endsection