@extends('layouts.app')
<!-- 
StAuth10065: I Tommy Nguyen, 000786251 certify that this material is my original work.
 No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.
-->
@section('content')
<h1>Create Booking </h1>
<a class="btn btn-dark" href={{ url('/prooms')}}>Go Back</a>
{!! Form::open(['action'=> 'ProomsController@store', 'method'=> 'POST']) !!}
<div class="form-group">
    <div class="form-group">

        {{form::label('guestname','Name')}}
        {{form::text('guestname','',['class' => 'form-control'])}}
    </div>
    
    {{ Form::Label('id', 'Hotel Room:') }}
  <select class="form-group" name="id">
      <option disabled selected value> -- select an option -- </option>
    @foreach($posts as $post)
      <option value="{{$post->number}}">{{$post->number}}</option>
    @endforeach
  </select>
</div>


<div class="form-group">
    
    {{form::label('checkin','Check in Date')}}
    
    {{Form::select('checkin', ['Sunday' => 'Sunday', 'Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 'Thursday' => 'Thursday', 'Friday' => 'Friday', 'Saturday' => 'Saturday'])}}
</div>
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection