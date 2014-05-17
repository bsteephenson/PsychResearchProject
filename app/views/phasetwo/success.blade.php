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
	Congratulations. You are finished! Thank you so very much for being a part of this study.
	Send an email to BCAPsychPersonalityStudy@gmail.com to tell us how we can give you your reward.
</p>



@stop
