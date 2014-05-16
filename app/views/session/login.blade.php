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
Login
{{ Form::open(array('action' => 'SessionController@postLogin'))}}
{{Form::text('key', '', array('placeholder'=>'Enter Key Here'))}}
{{Form::submit('Submit')}}
{{ Form::close() }}
@stop
