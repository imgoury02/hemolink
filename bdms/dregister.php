<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background: url("image/bg.png") no-repeat center center fixed;
  background-size: cover;
  color: black;
  margin: 0;
  padding: 0;
}


.container {
  width: 400px; /* Set the width of the container */
  margin: 0 auto; /* Center the container on the page */
  padding: 20px;
  background-color: white;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

h1 {
  text-align: center;
  color: #f00;
  text-transform: uppercase;
}
input[type=text], input[type=password], input[type=date] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid black;
  box-sizing: border-box;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 20px;
}

.registerbtn {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

.registerbtn:hover {
  background-color: white;
  color: black;
}

.signin {
  text-align: center;
}
</style>
</head>
<body>

<form action="daction.php" method="post">
  <div class="container">
    <h1>Donor Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="text"><b>Username</b></label>
    <input type="text" placeholder="Enter name" name="username" id="username" required>
   
    <label for="text"><b>Name</b></label>
    <input type="text" placeholder="Enter Phone Number" name="name" id="name" required>

    <label for="text"><b>Date of Birth</b></label><br>
    <input type="date"  name="dob" id="dob" required>
    <br>
    <label for="number"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter phone no." name="contact_no" id="contact_no" required>

    <label for="text"><b>Blood Group</b></label>
    <input type="text" placeholder="Enter Blood group" name="blood_group" id="blood_group" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="text"><b>Adhaar Number</b></label>
    <input type="text" placeholder="Enter Adhaar Number" name="proof_of_identity" id="proof_of_identity" required>

    <label for="text"><b>Last Donated</b></label><br>
    <input type="date" name="last_donated" id="last_donated" required>
    <br>
    <label for="text"><b>Other Medical Info (if any)</b></label>
    <input type="text" placeholder="Enter Infos Here" name="other_medical_info" id="other_medical_info" >

    <label for="text"><b>City</b></label>
    <input type="text" placeholder="Enter city" name="city" id="city" required>

    <label for="text"><b>District</b></label>
    <input type="text" placeholder="Enter district" name="district" id="district" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="dlogin.php">Sign in</a>.</p>
  </div>
</form>

</body>
</html>
