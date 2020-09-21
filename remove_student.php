<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class_student where teacher_class_student_id = '$id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>

