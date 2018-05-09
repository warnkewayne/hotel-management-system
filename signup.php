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
</body>
</html>
