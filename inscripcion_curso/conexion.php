<?php
$mysqli = new mysqli("localhost","root","","registro_curso");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>