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

	<center>
	<h2>Select Coach</h2>
	<select class="form-control" size="1" style="width:auto;font-size: 20px;" name="selectCoach" id="selectCoach" onchange="changeCoach(this.value)">
		<option value="0">Arthur</option>
		<option value="1">James</option>
		<option value="2">Sam</option>
		<option value="3">Lizbeth</option>
	</select>

	<br />

	<div id="display_coach"><img src="/rsc/coach/m1Neutral.png" width="30%" height="30%" /></div>

	</center>

	<script type="text/javascript">

		function changeCoach(userChoice){
			var output= document.getElementById("display_coach");
			output.innerHTML="";

			if(userChoice == 0) {
				output.innerHTML='<img src="/rsc/coach/m1Neutral.png" width="30%" height="30%" />';
			} else if (userChoice == 1) {
				output.innerHTML='<img src="/rsc/coach/m2Neutral.png" width="30%" height="30%" />';
			} else if (userChoice == 2) {
				output.innerHTML='<img src="/rsc/coach/f1Neutral.png" width="30%" height="30%" />';
			} else if (userChoice == 3) {
				output.innerHTML='<img src="/rsc/coach/f2Neutral.png" width="30%" height="30%" />';
			}

		}
	
	</script>

	
@stop