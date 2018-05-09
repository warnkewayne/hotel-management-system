<!doctype html>

<html lang="en">
  <head>
    <title>Check-In</title>
    <link rel="stylesheet" href="styles.css" type="text/css">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="change-background.js"></script>
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
<?php
// hotelManagement/index.php
// Created: April 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke


// Hotel Management System - Login page
//
// index.php will serve as the login page for the system.
// Guests, Managers/Employees will login from the same HTML form
// on button press, system will fetch user information from DB and create
// a session remembered throughout the system.
//
// Guest users will be taken to a guest page with guest options
// Managers will be taken to a management page with management options
// Employees will be taken to a employee page with options for employees
//
// A Description of the system will also be available on this page.
// At button click, the description will be displayed using JS
// At second button click, the description will be hidden.


//  Basic HTML
//  CSS Grid
// TODO: Login Page
// TODO: Product Description
// TODO: Create Employee Login Form

?>

<link rel="stylesheet" type="text/css" href="styles.css"/>

<div class="grid-container">

  <!-- Hotel Name -->
    <div class="grid-item" id="hotelname-container">

    </div><!-- end hotelname-container -->

  <!-- Login -->
    <div class="grid-item" id="login-container">
      <form id="loginForm" method="guest-login.php" action="post">
        <input type="text" name="username" placeholder="Username..."/>
        <br />
        <input type="password" name="password" placeholder="Password..."/>
        <br /><br />
        <input type="submit" value="Login" />
      </form>
    </div><!-- end login-container -->

  <!-- Footer -->
    <div class="grid-item" id="footer-container">

    </div><!-- end footer-container -->

</div><!-- end grid-container -->
<!-- END OF index.php -->
</div>
<ul class="nav-bar">
  <li><a href="index.php">Home</a></li>
  <li><a href="signup.php">Sign Up</a></li>
  <li><a href="check-in.php">Check In</a></li>
  <li><a href="check-out.php">Check Out</a></li>
  <li><a href="make-reservation.php">Make Reservation</a></li>
  <li><a href="emp-login.php">Employee Login</a></li>
</ul>
<div class="information-container">
  <h2>Comfort and Closeness at a Price You'll Love.</h2>
  <p>Discover a refresing hotel retreat in the heart of downtown Dunkirk, NY. With
  stylish accommodations and invigorating amenities, TWCS Hotel will make you free right
  at home during your stay.</p>
  <p>Well-appointed rooms and suites boast modern decor and perks including our iconic
    beds. Maintain your well-being at the fitness center, or explore Dunkirk on foot with
    our running program. If you're hosting an event in town, we offer flexible venues and
    comprehensive planning and catering services. Our hotel also provides eacy access to some
    of the city's top attractions. Whether you're traveling for business or pleasure, TWCS
    Hotel invites you to experience a revitalizing escape</p>
</div>
</body>
</html>
