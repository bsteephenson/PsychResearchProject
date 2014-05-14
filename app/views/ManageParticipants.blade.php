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
		$('table').html('');
		$('table').append('<tr><th>Name</th><th>Key</th><th>Compliance</th></tr>');
		$.ajax({
    	url : "all-participants",
    	cache : false,
    	success : function(arr){
    		for (var i = arr.length - 1; i >= 0; i--) {
    			$row = '<tr><td>' + arr[i].name + '</td><td>' + arr[i].key + '</td><td>' + arr[i].Compliance + '</td></tr>';

    			$('table').append($row);
    		};
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
		    	type : "POST",
		    	url : "create-participant",
		    	data : {'name' : $('#name').val(), 'key' : $('#key').val()},
		    	cache : false,
		    	success : function(jsonStuff){
		    		
				}
			});
			//say success

			//empty the form
			$('#name').val('');
			$('#key').val('');
			//repopulate table

			populateTable();

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

	</table>

@stop
