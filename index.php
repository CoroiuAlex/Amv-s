
<!DOCTYPE html>
<html>
<head>
  <title>Full Screen Landing Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>


  <button id="roundButton"></button>

  <div id="flyoutMenu">
    <h2><a href="#">Home</a></h2>
    <h2><a href="#">About</a></h2>
    <h2><a href="#">Contact</a></h2>
    <h2><a href="#">Search</a></h2>
  </div>



<!-- Login form -->
<div id="flyoutLog">
  <div id="Login">
    <section>
      <div class="inner">
        <div class="content">

          <form id="login-box" action="includes/login.inc.php" method="POST">
              <img src="img/avatar.png" class="avatar">

              <p>Username</p>
              <input type="text" name="uid" placeholder="Enter Username">
              <p>Password</p>
              <input type="password" name="pwd" placeholder="Enter Password">

              <div id="inLogin_btn"><button type="submit" name="submit">Login</button></div>

              <a class="lilbtn" href="#">Lost your password?</a><br>
              <a class="lilbtn" href="Signup.php">Don't have an account?</a>

            </form>
        </div>
      </div>
    </section>
  </div>
</div>


<!-- Header form -->
<div class="header">

  <div>

  </div>

  <ul class="nav" id="nav">
    <li><a href="#nav">Home</a></li>
    <li><a href="#nav">Amv's</a></li>
    <li><a href="#nav">Services</a></li>
    <li><a href="#nav">Work</a></li>
    <li><button id="Log_btn">Login</button><li>
    <li><form action="includes/logout.inc.php" method="POST"><button class="logout" type="submit" name="submit">Logout</button></form></li>
  </ul>

</div>



<!-- script for the page-top -->

  <script>
  var roundButton = document.querySelector("#roundButton");
  var flyoutMenu = document.querySelector("#flyoutMenu");

  roundButton.addEventListener("click", showMenu, false);
  flyoutMenu.addEventListener("click", hideMenu, false);

  function showMenu(e) {
    flyoutMenu.classList.add("show");

    document.body.style.overflow = "hidden";
  }
  function hideMenu(e) {
    flyoutMenu.classList.remove("show");
    e.stopPropagation();

    document.body.style.overflow = "auto";
  }




  var Log_btn = document.querySelector("#Log_btn");
  var flyoutLog = document.querySelector("#flyoutLog");
  var inLogin_btn = document.querySelector("#inLogin_btn");

  Log_btn.addEventListener("click", showLog, false);
  flyoutLog.addEventListener("click", hideLog, false);

  function showLog(e) {
    flyoutLog.classList.add("show");

    document.body.style.overflow = "hidden";
  }
  function hideLog(e) {
    flyoutLog.classList.remove("show");
    e.stopPropagation();

    document.body.style.overflow = "auto";
  }

  </script>





<div class="main-body">

    <!-- title -->
  <h1>heyyyyyyyyy</h1>

    <!-- front page info -->
  <div class="main-txt">
      <h2>Today's random pick</h2>


<?php
$search = 'syrex';
$vid_1 = 'https://www.youtube-nocookie.com/embed/QYxpY-U37aY?rel=0&controls=1&disablekb=1&modestbranding=1&showinfo=0&iv_load_policy=3&fs=0';
$vid_2 = 'https://www.youtube.com/embed/?index=0&listType=playlist&list=PLrR0UWVc3H19qjOsZ864Dw-KlrGPU7l7F&controls=1&modestbranding=1&iv_load_policy=3&rel=0';
$vid_3 = 'https://www.youtube.com/embed/QYxpY-U37aY?playlist=AKE4jz-awyw,X1wVZ1lsqA8&controls=1&modestbranding=1&iv_load_policy=3&rel=0';

$mt_rand = 1;

if ($mt_rand == 1) {
  echo '<div id="div"><iframe id="iframe_sec" width="560" height="315" src="'.$vid_1.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="vid"></iframe></div>';
} elseif ($mt_rand == 2) {
  echo '<iframe  width="560" height="315" src="'.$vid_2.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="vid"></iframe>';
} elseif ($mt_rand == 3) {
  echo '<iframe width="560" height="315" src="'.$vid_3.'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="vid"></iframe>';
} elseif ($mt_rand == 4) {
  echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/?listType=search&list='.$search.'&controls=1&modestbranding=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}
 ?>




  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </div>
</div>

</body>
</html>
