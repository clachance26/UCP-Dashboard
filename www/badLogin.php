<html>
<head>
<link rel="stylesheet" href="stylesheets/badLogin.css">
<title>UCP Login</title>
</head>

<body>
<p class="header">
  <img src="UCP_logo.png" alt="logo" width="300" height="121">
</p>

<div class="JUST">
<p class="login">
  Login
</p>
<p class="badLogin">
  Incorrect username and/or password
</p>

  <form action="login.php" method="post">
  <p class="loginIn">
    username: <input type="text" name="uname" class="textBoxes" required="required">
    <br><br>
    password: <input type="password" name="pw" class="textBoxes2" required="required">
    <br><br>
    <input type="submit">
  </p>
  </form>
  <p class="forgotten">
    forgot UN/PW?
  </p>

</div>
</body>
</html>
