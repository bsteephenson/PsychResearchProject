@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:140px;
  }
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')
{{Form::open(array('action' => 'ParticipantsController@postDelete'))}}
{{Form::hidden('id', $person->id)}}
{{Form::label('Confirm you want to delete ' . $person->name)}}
{{Form::submit('Confirm')}}
{{Form::close()}}
@stop
