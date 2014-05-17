@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:20px;
  }
  .btn{
  width: 100%;
  margin : 0 auto;
}
@stop

@section('javascript')
  
@stop

@section('body')
some details
{{ Form::open(array('action' => 'ComplianceController@postDetails'))}}
{{Form::text('key', '', array('placeholder'=>'Enter Key Here'))}}
<p>
	Enter an additional way we can contact you in case you fail to comply with the guidelines set by this study.
	Also include any other information  you would like to provide such a change in your name if you want to use a nickname.
</p>
{{Form::text('other_information', '', array('placeholder'=>'Enter Additional Information Here'))}}
{{Form::submit('I agree to take part in this study and I promise to complete all further tasks assigned to me.')}}
{{ Form::close() }}
@stop
