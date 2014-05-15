@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:10px;
  }
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')

{{ Form::open(array('action' => 'InventoryController@postInventoryForm'))}}

@foreach($list as $field)
	{{Form::checkbox($field)}}
	{{Form::label($field)}}
	<br />
@endforeach
{{Form::submit('Submit')}}		
{{ Form::close() }}
@stop
