

@extends('layouts.app')
<!-- 
StAuth10065: I Tommy Nguyen, 000786251 certify that this material is my original work.
 No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
-->
@section('content')
    <h1>Edit Room Description</h1>
    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method'=> 'POST']) !!}
        
        <div class="form-group">

            {{form::label('description','Description')}}
            {{form::textarea('description',$post->description,['class' => 'form-control', 'placeholder'=> 'Write a description'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection