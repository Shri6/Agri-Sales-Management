<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style2.css">
    <title>Signup</title>
</head>
<body>
<style>
        body {
          background-image: url('images/image3.jpg');
        }
      </style>
<div class="container">
        <div class="title">Registration</div>
            <div class="content">
      <form method="post" action="login/signUp.php">
        <br>
        <div class="details">
            <input type="radio" name="category" id="dot-1" value="1">
            <input type="radio" name="category" id="dot-2" value="0">
            <span class="boxtitle"> Category</span>
            <div class="category1">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="dot1">Farmer</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="dot1">Customer</span>
            </label>
            </div>
        </div>
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" id="name" value="" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">User name</span>
            <input type="text" name="uname" id="uname" value="" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text"  name="mobile" id="mobile" value="" placeholder="Enter phone number" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" id="email" value="" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" id="password" value="" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="pass" id="pass" value="" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="addr" id="addr" value="" placeholder="Enter your address" required>
          </div>
        </div>
        <div class="button">
          <a href="#"><input type="submit" value="Register"></a>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

