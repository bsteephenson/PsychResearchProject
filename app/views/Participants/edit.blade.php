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

{{Form::open(array('action' => 'ParticipantsController@postEdit'))}}
{{Form::hidden('id', $person->id)}}
{{Form::text('name', $person->name)}}
{{Form::text('key', $person->key)}}{{Form::submit('Submit')}}

{{Form::close()}}
@stop
