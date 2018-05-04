<?php
// hotelManagement/DB.php
// Created: May 4th, 2018
// Created by Wayne Warnke
//
// Last Edit: May 4th, 2018
// Edited by Wayne Warnke


// Hotel Management System - DB Class
//
// DB.php is a class that establishes a connection to
// the database. It's function "query" takes a query and
// executes it using the database.
//
//
// TODO: Change the server, user, pw, and database name variables
//       to corrilate with the database we will be using.

class DB {
  public $conn;

//constructor for DB connection
function _construct() {
  $server = 'localhost'; //server name
  $user = 'root'; //user name
  $pw = ''; // password name
  $this->conn = new mysqli(
    $server, $user, $pw, 'finalDB'
  );

  if($this->conn->connect_error){
    die('connection failed: ' . $this->conn->connect_error);
  }
}


//fucntion query
public function query($sql){
  $result = $this->conn->query($sql);
  if($result){
    return $result;
  }
  else {
    die('Query error: ' . $this->conn->error);
  }
}


} // END OF CLASS
 ?>
