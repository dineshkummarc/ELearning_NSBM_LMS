<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($GLOBALS["___mysqli_ston"], "delete from event where event_id = '$get_id'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>
<script>
window.location = 'calendar_of_events.php';
</script>