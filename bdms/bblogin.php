<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Standard box styling */
.login-box {
  width: 400px;
  margin: 0 auto;
  padding: 20px;
  border: 3px solid #ccc;
  border-radius: 10px;
  background-color: #f9f9f9;
}

/* Heading styling */
h2 {
  text-align: center;
  color: #f00;
  text-transform: uppercase;
}

/* Textbox styling */
input[type=text], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

/* Button styling */
button {
  background-color: #000;
  color: white;
  padding: 10px;
  margin: 5px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #fff;
  color: #000;
  opacity: 0.8;
}
</style>
</head>
<body>

<h2>BLOOD BANK LOGIN</h2>

<!-- Wrap the form in a div with the login-box class -->
<div class="login-box">
  <form action="/action_page.php" method="post">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="reg">Don't have an account? <a href="bbregister.php">Register</a></span>
      <span class="psw">Forgot <a href="forget.php">password?</a></span>
    </div>
  </form>
</div>

</body>
</html>
