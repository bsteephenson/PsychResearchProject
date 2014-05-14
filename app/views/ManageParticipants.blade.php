@extends('layouts.master')

@section('title')
  Manage Participants
@stop

@section('css')
	th{
		width:100px;
	}
@stop

@section('javascript')
	function populateTable(){
		$.ajax({
    	url : "ManageParticipants/getParticipants",
    	cache : false,
    	success : function(jsonStuff){
    		$('body').append(jsonStuff);
    	}
    	});
	}
	$(document).ready(function(){
		//populate table
		populateTable();

		//what to do on clicking the add button

		$('#submit').on('click', function(){
			//push to db
			$.ajax({
		    	url : "ManageParticipants/createParticipant",
		    	data : {name: $('#name').val(), key : $('#key').val()},
		    	cache : false,
		    	success : function(jsonStuff){
		    		$('body').append(jsonStuff);
				}
			});
			//say success

			//empty the form

			//repopulate table

			return false;
		})

		//what to do on editing of a cell
	});
@stop

@section('body')

	<h1>Manage the participants</h1>

	<form id = "addParticipantForm">
		<input id = "name" type = "text" placeholder = "Enter Name"></input>
		<input id = "key" type = "text" placeholder = "Enter Key"></input>
		<input id = "submit" type="submit" value = "submit">
	</form>

	<table>
		<tr>
			<th>Name</th>
			<th>Key</th>
			<th>Compliance</th>
		</tr>
	</table>

@stop
