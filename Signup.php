<!DOCTYPE html>
<html>
<head>
  <title>Full Screen Landing Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <section id="Signup-box">
    <div class="inner">
      <div class="content">

        <form class="Signup-box" action="includes/signup.inc.php" method="POST">
          <img src="img/avatar.png" class="avatar">
            <p>Firstname</p>
            <input type="text" name="first" placeholder="Enter Firstname">
            <p>Lastname</p>
            <input type="text" name="last" placeholder="Enter Lastname">
            <p>E-mail</p>
            <input type="text" name="email" placeholder="Enter E-mail">
            <p>Username</p>
            <input type="text" name="uid" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="pwd" placeholder="Enter Password">
            <button class="button" type="submit" name="submit">Sign up</button><br>
            <a href="index.php">Already have an account?</a>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
