<!DOCTYPE html>
<html lang="en">
@if (Auth::guest())
     
    <script type="text/javascript">
    window.location = "/login";//here double curly bracket
    </script>

@else
<head>

@yield('audio')
<script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.10;
</script>

  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="/js/jquery-3.1.1.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/css/stylenew.css" type="text/css" />
  <script type="text/javascript">
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
  </script>
  

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/test">QuizMe!</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      @yield('navbar')
        
        <!--<li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>-->
        <li>&nbsp&nbsp&nbsp</li>
        @if (Auth::user()->status === 0)
          <li>Welcome, {{ Auth::user()->name }}!</li>
        @elseif (Auth::user()->status === 1)
          <li>Welcome, Teacher {{ Auth::user()->name }}</li>
        @elseif (Auth::user()->status === 2)
          <li>Welcome, Admin {{ Auth::user()->name }}</li>
        @endif
        <br />
        <li>&nbsp&nbsp&nbsp</li>
        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
      </ul>
    </div>
  </div>
</nav>
        @if (Auth::user()->status === 0)
          @yield('home')
        @elseif (Auth::user()->status === 1)
          @yield('teacher')
        @elseif (Auth::user()->status === 2)
          @yield('admin')
        @endif




<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>QuizMe! Alpha Build v0.2</a></p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>

@endif
</html>
