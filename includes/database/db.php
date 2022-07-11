<?php
$connect = new mysqli("localhost", "u976956619_rgscp", "Sid12asthana", "u976956619_rgscp");
// $connect = new mysqli("localhost","root","","test");

// Check connection
if ($connect->connect_errno) {
  echo "Failed to connect to MySQL: " . $connect->connect_error;
  exit();
}