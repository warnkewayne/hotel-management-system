<!doctype html>

<html lang="en">
  <head>
    <title>Check-In</title>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="change-background.js"></script>
    <link rel="stylesheet" href="styles.css" type="text/css">
  </head>
  <body>
    <div class="title-container">
      <h1>TCWS Hotels</h1>
    </div>
    <div class="background-container">
      <?php
      // hotelManagement/create-housekeep.php
      // Created: May 5th, 2018
      // Created by Wayne Warnke
      //
      // Last Edit: May 5th, 2018
      // Edited by Wayne Warnke
      //
      //
      //
      //
      //
      //
      //
      //TODO:startsession();

      require 'DB.php';

      $db = new DB();

      $roomID = $_POST['roomNumber'];
      $staffID = $_POST['empNumber'];
      $time = $_POST['time']; //TODO: how will we get the time?


      $statement = $db->conn->prepare("INSERT INTO clean (room_id, staff_id, housekeeping_time) VALUES (?,?,?)");
        if(!$statement) die("Prepare failed: " . $db->conn->error);

      $bind = $statement->bind_param("iis", $roomID, $staffID, $time); //// TODO: is time a string?
        if(!$bind) die("Prepare failed: " . $statement->error);

      $execute = $statement->execute();
        if($execute) die("Execute failed: " . $statement->error);

       //TODO: Redirect back to view page

       ?>
     </div>
   </body>
 </html>
