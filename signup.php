<!doctype html>

<html lang="en">
  <head>
    <title>Check-In</title>
    <script src="change-background.js"></script>
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
<?php
// hotelManagement/signup.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 6th, 2018
// Edited by Caleb Sarikey
//
//
// This is the signup form that will post the new GUEST's information
// so that register-guest can insert it into the DB.
//

 ?>


 <!-- Added inputs for all columns of the guest table in the DB. -->
 <div id="signup">
  <h2>Sign up</h2>
  <form id="signup" action="register-guest.php" method="post">
    <input id="first" required name="first_name" type="text" placeholder="First Name..."/>
    <input id="last" name="last_name" type="text" placeholder="Last Name..."/>
    <br />
    <input id="username" required name="username" type="text" placeholder="Username..."/>
    <br />
    <input id="pw" required name="password" type="password" placeholder="Password"/>
    <input id="confirmPW" required name="confirmPW" type="password" placeholder="Confirm Password"/>
    <br />
    <button id="signup">Create User</button>
  </form>
</div>
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
