@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:50px;
    text-align: center;
  }
	.btn{
		width:50%;
		margin-left : 25%;
		margin-right: 25%;
	}
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')
{{$person}}
<br />


{{ Form::open(array('action' => 'PhaseTwoController@postKnowThisPerson'))}}
{{Form::submit('I DO know this person')}}
{{ Form::close() }}

{{ Form::open(array('action' => 'PhaseTwoController@postGetNewPerson'))}}
{{Form::submit('I DO NOT know this person')}}
{{ Form::close() }}
@stop
