 <?php
 include('dbcon.php');
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($GLOBALS["___mysqli_ston"], "update teacher set password = '$new_password' where teacher_id = '$session_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
 ?>