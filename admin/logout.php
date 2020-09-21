<?php
include('dbcon.php');
include('session.php');
mysqli_query($GLOBALS["___mysqli_ston"], "update user_log set logout_Date = NOW() where user_id = '$session_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));

 session_destroy();
header('location:index.php'); 
?>