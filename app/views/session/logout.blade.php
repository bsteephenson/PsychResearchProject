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
Thank you! You have successfully logged out.
@stop
