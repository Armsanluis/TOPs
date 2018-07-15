<div id="loginForm" class="modal">
  
  <form class="modal-content animate" action="login_action.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('loginForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="assets/user_avatar1.png" alt="Avatar" class="avatar">
    </div>
    <div class="container">
      <h3>Log In</h3>
      <input type="text" placeholder="Enter Username" name="uname" required><br>

      <input type="password" placeholder="Enter Password" name="psw" required><br>
        
      <button type="submit" id="loginbtn">Login</button><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me</label><br>
    	<button type="button" onclick="document.getElementById('loginForm').style.display='none'" class="cancelbtn">Cancel</button><br>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('loginForm');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<div id="registrationForm" class="modal">
  
  <form class="modal-content animate" action="registerNewUser.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('registrationForm').style.display='none'" class="close" title="Close Modal">&times;</span>
      <br>
    </div>
    <div class="container">
      <h3>Register</h3>
      <input type="text" placeholder="Enter Username" name="uname" required class="form-control" id="user_name">
      <br>
      <input type="email" placeholder="Enter email address" name="eadd" required class="form-control" id="email_add">
      <br>
      <input type="password" placeholder="Enter Password" name="pswd" required class="form-control" id="pass_word">
      <br>
      <br>
      <button type="submit" name="reg_user" id="registerbtn">Register</button>
      <br>
      <br>
      <button type="cancel" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('registrationForm');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
 </html>
