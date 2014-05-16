@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:40px;
  }
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')

{{ Form::open(array('action' => 'ParticipantsController@postCreate'))}}
{{Form::text('name', '',array('placeholder' => 'Name'))}}
{{Form::text('key', $key)}}
{{Form::text('email', '',array('placeholder' => 'Email'))}}
{{Form::text('other_information', '',array('placeholder' => 'Other Information'))}}

{{Form::submit('Submit')}}
{{ Form::close() }}
@stop
