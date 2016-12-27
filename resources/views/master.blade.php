<!DOCTYPE html>
<html lang="en">
<head>
  @yield('audio')
  <script>
    var audio = document.getElementById("myaudio");
    audio.volume = 0.05;
  </script>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/jquery.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <center><h4><img src="/rsc/bulbfinal.png" width="45%" height="45%"><br />Quiz Me!</h4></center>
      <ul class="nav nav-pills nav-stacked">
      
      @yield('activenav')

      </ul><br>
    </div>

    @yield('body')

  </div>
</div>

<footer class="container-fluid">
  <p>QuizMe! Alpha Build 2016-2017</p>
  <p><a href="/">Logout</a></p>
</footer>

</body>
</html>
