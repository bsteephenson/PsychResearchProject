@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:20px;
  }
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')
<p>
	Here are instructions of some sort
</p>

<p>
	{{link_to_action('InventoryController@getInventoryPage', 'Click here to begin.')}}
</p>


@stop
