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
      // hotelManagement/check-in.php
      // Created: May 5th, 2018
      // Created by Wayne Warnke
      //
      // Last Edit: May 5th, 2018
      // Edited by Wayne Warnke
      //
      //TODO:startsession();

      require 'DB.php';

      $db = new DB();

      $roomID = $_POST['room_id'];
      $guestFirst = $_POST['first_name'];
      $guestLast = $_POST['last_name'];
      $guestID; // Get guest id from select statement
      $date = date("y/m/d"); // current date


      $stmt = $db->conn->prepare("SELECT guest_id FROM guest WHERE first_name = ? && last_name = ?");
        if(!$stmt) die("Prepare failed: " . $db->conn->error);

      $bind = $stmt->bind_param("ss", $guestFirst, $guestLast);
        if(!$bind) die("Prepare failed: " . $stmt->error);

      $execute = $stmt->execute();
        if($execute) die("Execute failed: " . $stmt->error);

      $bResult = $stmt->bind_result($guestID);
      $stmt->fetch();

      $stmt->free_result();
      ////////////////////////////////////////////////////////


      $checkin = $db->conn->prepare("UPDATE reserve SET check_in = 1 WHERE guest_id = ? AND room_id = ? AND res_start = $date");
        if(!$checkin) die("Prepare failed: " . $db->conn->error);

      $b = $checkin->bind_param("ii", $guestID, $roomID);
        if(!$b) die("Bind failed: " . $checkin->error);

      $e = $checkin->execute();
        if(!$e) die("Execute failed: " . $checkin->error);


      //TODO: redirect back to view page
       ?>
    </div>
  </body>
</html>
