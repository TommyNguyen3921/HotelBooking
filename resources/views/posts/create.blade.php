@extends('layouts.app')

@section('content')
    <h1>Create Room</h1>
    {!! Form::open(['action'=> 'PostsController@store', 'method'=> 'POST']) !!}
        <div class="form-group">

            {{form::label('number','Room Number')}}
            {{Form::number('number','',['class' => 'form-control'])}}
        </div>
        <div class="form-group">

            {{form::label('name','Room Name')}}
            {{form::text('name','',['class' => 'form-control'])}}
        </div>
        <div class="form-group">

            {{form::label('description','Description')}}
            {{form::textarea('description','',['class' => 'form-control', 'placeholder'=> 'Write a description'])}}
        </div>
        <div class="form-group">
            
            {{form::label('maxocc','Max occupancy')}}
            {{Form::number('maxocc','',['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}
@endsection