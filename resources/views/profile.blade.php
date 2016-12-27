@extends('master')

@section('audio')
	<audio id="myaudio" loop="true" autoplay="true" src="/rsc/003.mp3"></audio>
@stop

@section('title')
    Profile
@stop


@section('activenav')
	<li><a href="/welcome">Home</a></li>
    <li><a href="/lessons">Lessons</a></li>
    <li class="active"><a href="#">Profile</a></li>
@stop

@section('body')



	<script type="text/javascript">
		
		function changeCoach(){

			document.getElementByID("display_coach").style ="";
		}

		

	</script>

	<button name="changeMyCoach" id="changeMyCoach" onclick="changeCoach()">Click</button>

	<img src="rsc/coach/mNeutral.png" width="50%" height="50%" id="display_coach" style="display: none;">


	

@stop