<?php
$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASENAME = 'event_dashboard';

$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABASENAME);

if (!$con)
  exit();
?>