<!DOCTYPE html>
<html>
<head>
  <title>Loginpage</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-12 col-lg-4"></div>
      <div class="col-xs-12 col-md-12 col-lg-4">
        <form action="login_action.php" method="post">
  <div class="imgcontainer">
    <img src="assets/user_avatar1.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><span class="glyphicon glyphicon-user"></span>&nbsp;Username</label><br>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>

    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;Password</label><br>
    <input type="password" placeholder="Enter Password" name="psw" required><br><br>
        
    <button type="submit">Login</button><br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="footer">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="register">Not a member yet?&nbsp;<a href="register.php">Sign In</a></span>
    <span class="psw">Forgot <a href="#">password?&nbsp;</a></span>
  </div>
</form>
      </div>
      <div class="col-xs-12 col-md-12 col-lg-4"></div>
    </div>
  </div>
  
</body>
</html>


	

