<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("AZURE_MYSQL_HOST","AZURE_MYSQL_USERNAME","AZURE_MYSQL_PASSWORD","AZURE_MYSQL_DBNAME");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
