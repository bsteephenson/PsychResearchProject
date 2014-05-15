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
{{$person}}
<br />
{{ Form::open(array('action' => 'PhaseTwoController@postGetNewPerson'))}}
{{Form::submit('I do not know this person')}}
{{ Form::close() }}

{{ Form::open(array('action' => 'PhaseTwoController@postKnowThisPerson'))}}
{{Form::submit('I do know this person')}}
{{ Form::close() }}

@stop
