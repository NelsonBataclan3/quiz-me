@extends('master')

@section('audio')
	<audio id="myaudio" loop="true" autoplay="true" src="/rsc/004.mp3"></audio>
@stop

@section('title')
    Lessons
@stop


@section('activenav')
	<li><a href="/welcome">Home</a></li>
    <li class="active"><a href="#">Lessons</a></li>
    <li><a href="/profile">Profile</a></li>
@stop

@section('body')

@stop	