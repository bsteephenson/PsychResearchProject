@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:20px;
  }
  .btn{
  	width: 25%;
  	margin-left: 37.5%;
  	margin-right: 37.5%;
	}

@stop

@section('javascript')
  $('#logout').hide();
  $('input[type="text"]').focus();
@stop

@section('body')

{{ Form::open(array('action' => 'SessionController@postLogin'))}}
{{Form::text('key', '', ['placeholder' => 'Enter Key Here', 'class' => 'form-control'])}}
{{Form::submit('Submit')}}
{{ Form::close() }}
@stop
