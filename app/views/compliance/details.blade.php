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
some details
{{ Form::open(array('action' => 'ComplianceController@postDetails'))}}
{{Form::text('key', '', array('placeholder'=>'Enter Key Here'))}}
{{Form::label('Enter an additional way we can contact you in case you fail to comply with the guidelines set by this study.
	Also include any other information  you would like to provide such a change in your name if you want to use a nickname.')}}
{{Form::text('other_information', '', array('placeholder'=>'Enter Key Here'))}}
{{Form::submit('Submit')}}
{{ Form::close() }}
@stop
