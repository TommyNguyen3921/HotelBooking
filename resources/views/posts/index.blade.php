@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>
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
        @if(count($posts) > 0)
        @foreach($posts as $post)
        <tr>
       
       
        <td>{{$post->number}}</td>
        <td>{{$post->name}}</td>
        <td>{{$post->description}}</td>
        <td>{{$post->maxocc}}</td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
        </tr>
        @endforeach
       </table>
       @endif
@endsection