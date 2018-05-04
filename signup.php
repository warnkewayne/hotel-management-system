<?php
// hotelManagement/signup.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke
//
//
// This is the signup form that will post the new GUEST's information
// so that register-guest can insert it into the DB.
//

 ?>


 <!-- TODO: Add the other inputs for the other columns of the guest table in the
            DB. -->
 <div id="signup">
  <h2>Sign up</h2>
  <form id="signup" action="register-guest.php" method="post">
    <input id="first" required name="first_name" type="text" placeholder="First Name..."/>
    <input id="last" name="last_name" type="text" placeholder="Last Name..."/>
    <br />
    <input id="pw" required name="password" type="password" placeholder="Password"/>
    <input id="confirmPW" required name="confirmPW" type="password" placeholder="Confirm Password"/>
    <br />
    <button id="signup">Create User</button>
  </form>
</div>
