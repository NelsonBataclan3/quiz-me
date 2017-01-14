@extends('master')

        @if (Auth::guest())
            <script type="text/javascript">
            window.location = "/login";//here double curly bracket
            </script>
        @elseif (Auth::user()->status === 0)
          <script type="text/javascript">
          window.location = "/home";//here double curly bracket
          </script>
        @elseif (Auth::user()->status === 1)
          <script type="text/javascript">
          window.location = "/teacher";//here double curly bracket
          </script>
        @endif
 
<!DOCTYPE html>
<html lang="en">
<head>
@section('audio')
  <audio id="myaudio" loop="true" autoplay="true" src="/rsc/005.mp3"></audio>
@stop

@section('title')
  QuizMe!
@stop

@section('navbar')
  <li><a href="#lesson">LESSONS</a></li>
  <li><a href="#register">REGISTER</a></li></li>
  <li><a href="/profile">PROFILE</a></li>
@stop

@section('admin')

<div class="jumbotron text-center">
  <h1><img src="/rsc/bulbfinal.png" width="20%" /></h1> 
  <p>Welcome to QuizMe!</p> 
  <!--<form>
    <div class="input-group">
      <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger">Subscribe</button>
      </div>
    </div>
  </form>-->
</div>

<div id="lesson" class="container-fluid">
  <div class="row">
  <div class="col-sm-4">
      <span class="glyphicon glyphicon-education logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Latest lesson</h2><br>
      <h5><span class="glyphicon glyphicon-time"> January 2016</h5>
      <h4>Finding the value of expressions</h4><br>
      <p>Learn how to find the values of variables!</p>
      <br><a href="/uploadfile"><button class="btn btn-default btn-lg">Go to Lessons</button></a>
    </div>
    
  </div>
</div>

<div id="register" class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-question-sign logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Register</h2>
      <a href="/register"><button class="btn btn-default btn-lg">Register New Student</button></a>&nbsp;&nbsp;
      <a href="/register"><button class="btn btn-default btn-lg">Register New Teacher</button></a>
            <!--<p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>-->
    </div>
  </div>
</div>

<!--
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div> -->

<!--
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Portfolio</h2><br>
  <h4>What we have created</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="newyork.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div><br> -->
  <!--
  <div class="container-fluid">
    <div class="container">
        <div class="row">
            <h2>Click the coaches for a message!</h2>

            <center>

            <a data-toggle="popover" data-placement="left" title="Sam says:" data-content="Practice makes perfect!"><img src="/rsc/coach/f1neutral.png" width="10%" /></a>
            <a data-toggle="popover" data-placement="bottom" title="Lizbeth says:" data-content="Never give up, never surrender!"><img src="/rsc/coach/f2neutral.png" width="10%" /></a>
            <a data-toggle="popover" data-placement="bottom" title="Arthur says:" data-content="Lovely weather aye?"><img src="/rsc/coach/m1neutral.png" width="10%" /></a>
            <a data-toggle="popover" data-placement="right" title="James says:" data-content="Math is easy if you dedicate yourself!"><img src="/rsc/coach/m2neutral.png" width="10%" /></a>

            </center>

        </div>
    </div>
</div>
  
  

  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

     Wrapper for slides 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Quiz Me! Staff<br><span style="font-style:normal;">Ronan</span></h4>
      </div>
      <div class="item">
        <h4>Quiz Me! Staff<br><span style="font-style:normal;">Nelson</span></h4>
      </div>
      <div class="item">
        <h4>Quiz Me! Staff<br><span style="font-style:normal;">Vince</span></h4>
      </div>
      <div class="item">
        <h4>Quiz Me! Staff<br><span style="font-style:normal;">Jolas</span></h4>
      </div>
    </div>

     Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
-->
<!--
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>Pricing</h2>
    <h4>Choose a payment plan that works for you</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Basic</h1>
        </div>
        <div class="panel-body">
          <p><strong>20</strong> Lorem</p>
          <p><strong>15</strong> Ipsum</p>
          <p><strong>5</strong> Dolor</p>
          <p><strong>2</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$19</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Pro</h1>
        </div>
        <div class="panel-body">
          <p><strong>50</strong> Lorem</p>
          <p><strong>25</strong> Ipsum</p>
          <p><strong>10</strong> Dolor</p>
          <p><strong>5</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$29</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Premium</h1>
        </div>
        <div class="panel-body">
          <p><strong>100</strong> Lorem</p>
          <p><strong>50</strong> Ipsum</p>
          <p><strong>25</strong> Dolor</p>
          <p><strong>10</strong> Sit</p>
          <p><strong>Endless</strong> Amet</p>
        </div>
        <div class="panel-footer">
          <h3>$49</h3>
          <h4>per month</h4>
          <button class="btn btn-lg">Sign Up</button>
        </div>
      </div>      
    </div>    
  </div>
</div> -->

<!--
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="googleMap" style="height:400px;width:100%;"></div> -->

<!-- Add Google Maps -->
<!--
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(41.878114, -87.629798);

function initialize() {
var mapProp = {
  center:myCenter,
  zoom:12,
  scrollwheel:false,
  draggable:false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script> -->

@stop