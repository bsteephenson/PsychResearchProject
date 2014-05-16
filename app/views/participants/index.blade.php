@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
  body{
    font-size:20px;
  }
  td{
    width : 15%;
  }
@stop

@section('javascript')
  $(document).ready(function(){
    //alert("worketh?");
  });
@stop

@section('body')
{{link_to_action('ParticipantsController@getCreate', 'Add A Participant')}}
<table>
  <tr><th>Name</th><th>Email</th><th>Key</th><th>Compliance</th><th>Actions</th><th>Other Info</th></tr>
  @foreach($list as $person)
    <tr>
      <td>{{$person->name}}</td>
      <td>{{$person->email}}</td>
      <td>{{$person->key}}</td>
      <td>{{$person->compliance}}</td>
      <td>{{link_to_action('ParticipantsController@getEdit', 'Edit', array('id' => $person->id))}} |
      {{link_to_action('ParticipantsController@getDelete', 'Delete', array('id' => $person->id))}}</td>
      <td>{{$person->other_information}}</td>

    </tr>
  @endforeach
</table>
@stop
