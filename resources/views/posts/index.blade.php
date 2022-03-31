@extends('layouts.app')

<!-- 
StAuth10065: I Tommy Nguyen, 000786251 certify that this material is my original work.
 No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
-->
@section('content')
    <h1>Rooms</h1>
   

    <h1><a class="nav-link" href={{ url('posts/create')}}>Create Room</a><h1>
    
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
        <td><a href = "posts/{{$post->id}}/edit" >Edit</a></td>
       

        <td>
            {!!Form::open(['action'=> ['PostsController@destroy',$post->id, 'method' => 'POST']])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            {!!form::close()!!}

            
        </td>
        </tr>
        @endforeach
       </table>
       @endif
@endsection