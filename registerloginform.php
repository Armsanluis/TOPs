<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>

  <p class="tip">Let's get you started</p>
<div class="cont">
  <form class="form sign-in" action="login_action.php" method="post">
    <h2>Welcome back,</h2>
    <label>
      <span>Email</span>
      <input type="email" / name="email" required>
    </label>
    <label>
      <span>Password</span>
      <input type="password" / name="psw" required>
    </label>
    <p class="forgot-pass">Forgot <a href="#">password?</a></p>
    <button type="submit" class="submit">Sign In</button>
    <button type="button" class="fb-btn">Connect with <span><a href="https://www.facebook.com">facebook</a></span></button>
  </form>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>New here?</h2>
        <p>Sign up and discover great products for a beautiful you!</p>
      </div>
      <div class="img__text m--in">
        <h2>One of us?</h2>
        <p>If you already have an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <form action="registerNewUser.php" method="post">
      <h2>Time to feel like home,</h2>
      <label>
        <span>Name</span>
        <input type="text" / name="uname" required>
      </label>
      <label>
        <span>Email</span>
        <input type="email" / name="eadd" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" / name="pswd" required>
      </label>
      <label>
        <span>Delivery Address</span>
        <input type="text" / name="home_address" required>
      </label>
      <label>
        <span>Alternative Delivery Address</span>
        <input type="text" / name="alt_address" required>
      </label>
      <label>
        <span>Mobile Number</span>
        <input type="text" / name="mobile_number" required>
      </label>
      <label>
        <span>Credit Card Number</span>
        <input type="text" / name="credit_card_number" required>
      </label>
      <button type="submit" class="submit" name="reg_user" id="registerbtn">Sign Up</button>
      <button type="button" class="fb-btn">Join with <span><a href="https://www.facebook.com">facebook</a></span></button>
    </form>
    </div>
  </div>
</div>


  

    <script  src="js/index.js"></script>




</body>

</html>
