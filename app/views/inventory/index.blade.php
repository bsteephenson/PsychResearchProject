@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
	body{
		font-size:10px;
	}
	.formField{
		border-style: solid;
		border-width: 1px;
		padding: 10px;
		width: 150px;
		float: left;
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
	<div class="formField">
	{{Form::checkbox($field)}}
	{{Form::label($field)}}
	</div>
@endforeach
{{Form::submit('Submit')}}		
{{ Form::close() }}
@stop
