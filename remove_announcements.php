<?php include('admin/dbcon.php'); ?>
<?php
$id = $_POST['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
mysqli_query($GLOBALS["___mysqli_ston"], "delete from teacher_class_announcements where teacher_class_announcements_id = '$id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>

