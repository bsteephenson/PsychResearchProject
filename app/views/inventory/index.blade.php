@extends('layouts.master')

@section('title')
  The title
@stop

@section('css')
	body{
		font-size:20px;
		text-align:center;
	}

	.checkboxReplacement {
		width : 20%;
		float : left;
		margin-left : 2.5%;
		margin-right : 2.5%;
		margin-top : 5px;
		margin-bottom : 5px;
	}
	#containSubmitButton>.btn{
		margin-top: 10px;
        background-color: #f55914;
        border-width: 0;
        color: white;
        margin-left:0px;

	}
	#containSubmitButton{
		text-align:center;

	}

@stop

@section('javascript')
	$('.formField>input[type="checkbox"]').each(function(index, checkbox){
		$(checkbox).hide();
		var name = $(checkbox).prop('name');
		$(checkbox).parent().append('<button type="button" class="btn checkboxReplacement btn-default">' + name + '</button>');
	});
	$('.checkboxReplacement').on('click', function(){
        $(this).toggleClass('btn-success');
        $(this).toggleClass('btn-default');
        $(this).blur();
        
        var name = $(this).text();
        var checkbox = $('input[type="checkbox"][name = "'+ name +'"]');
        var isChecked = $(checkbox).is(':checked');
        $(checkbox).prop('checked', !isChecked);
	});
	$('.firstSubmitButton').on('click', function(){
		//make sure that not all is unclicked.
		
		$('.firstSubmitButton').prop('value', 'Submit...');		
		$('.firstSubmitButton').blur();
		
		var count = 0;
		$('input[type="checkbox"]').each(function(index, value){
			count += $(value).is(':checked');
		});
		if(count < 1){
			setTimeout(function(){
				$('.firstSubmitButton').prop('value', 'Click at least one word.');
			}, 500);
			setTimeout(function(){
				$('.firstSubmitButton').prop('value', 'Submit');
			}, 5000);
			return false;
		}
		//chane name to submit ....
		//delay and change name to Are You Sure?, change class to veryifySubmit
		setTimeout(function(){
			$('.firstSubmitButton').prop('value', 'Confirm');
			$('.firstSubmitButton').addClass('confirmSubmit');
			$('.firstSubmitButton').removeClass('firstSubmitButton');
		}, 500);
		$('.confirmSubmit').blur();
		$('.confirmSubmit').on('click', function(){
			console.log('hereth?');
			$('form').submit();
		});

		return false;	
	});

@stop

@section('body')

{{ Form::open(array('action' => 'InventoryController@postInventoryForm'))}}
<?php if($choser != $chosen) : ?>
Pick words that describe  '{{$name}}'
<?php else :  ?>
Pick words that describe yourself.
<?php endif;?>
@foreach($list as $field)
	<div class="formField">
	{{Form::checkbox($field)}}

	</div>
@endforeach
<?php if($choser != $chosen) : ?>
	On an ambiguous scale from 1 to 10, how well do you know this person?
<br />
{{Form::selectRange('howWellKnown', 1, 10, 5)}}

<?php endif; ?>
<div id="containSubmitButton">
{{Form::submit('Submit', ['class' => 'btn firstSubmitButton btn-large btn-primary openbutton'])}}
</div>	
{{ Form::close() }}
@stop
