<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upload File</title>
  </head>
  <body>

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

    <?php
      
     echo '<p align=\'left\'>';
        echo '<br>';
        echo '<br>';
        echo '<br>'; 

        echo Form::open(['url'=>'/uploadfile','files'=>'true']);
        echo '&nbsp;&nbsp;&nbsp;Please Select a File to Upload ';
        echo '<br>';
        echo Form::file('image');
        echo '<br>';  
        echo '&nbsp;&nbsp;';
        echo Form::submit('Upload File');
        echo '<br>';
        echo Form::close();
      echo '</p>';

     ?>

  </body>
</html>