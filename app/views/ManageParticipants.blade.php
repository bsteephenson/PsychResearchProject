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
    alert("worketh?");
  });
@stop

@section('body')
  The body
@stop
