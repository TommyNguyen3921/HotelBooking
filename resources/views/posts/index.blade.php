@extends('layouts.app')

@section('content')
    <h1>Rooms</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
        <div class="well">
            <h3><a href="posts/{{$post->id}}">{{$post->number}}</a></h3>
         

        </div>
        @endforeach
    @else
        <p>no posts found</p>
    @endif

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