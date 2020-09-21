<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from files where file_id = '$id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>
