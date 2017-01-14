@extends('master')

@section('audio')
	<audio id="myaudio" loop="true" autoplay="true" src="/rsc/004.mp3"></audio>
@stop

@section('title')
    Lessons
@stop

@section('navbar')
  <li><a href="#lesson">LESSON</a></li>
  <li><a href="/profile">PROFILE</a></li>
@stop

@section('body')
	<div id="lesson" class="container-fluid bg-grey">
  	<div class="row">
    <div class="col-sm-8">
      <h2>Whoops! Nothing yet! </h2>
    </div>
  </div>
</div>
@stop	