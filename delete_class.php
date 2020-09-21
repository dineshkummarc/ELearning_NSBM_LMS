<?php
include('admin/dbcon.php');
$get_id = $_POST['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class  where  teacher_class_id = '$get_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class_student  where  teacher_class_id = '$get_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class_announcements  where  teacher_class_id = '$get_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_notification  where  teacher_class_id = '$get_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from class_subject_overview where  teacher_class_id = '$get_id' ")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
header('location:dasboard_teacher.php');
?>