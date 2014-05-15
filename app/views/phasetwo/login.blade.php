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

{{ Form::open(array('action' => 'PhaseTwoController@postLogin'))}}
{{Form::text('key', '',array('placeholder' => 'Enter your key here'))}}
{{Form::submit('Submit')}}
{{ Form::close() }}
@stop
