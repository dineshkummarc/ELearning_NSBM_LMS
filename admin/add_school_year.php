   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Academic Year</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="school_year" id="focusedInput" type="text" placeholder = "Academic Year" required>
                                          </div>
                                        </div>
										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					<?php
if (isset($_POST['save'])){
$school_year = $_POST['school_year'];



$query = mysqli_query($GLOBALS["___mysqli_ston"], "select * from school_year where school_year = '$school_year'")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($GLOBALS["___mysqli_ston"], "insert into school_year (school_year) values('$school_year')")or die(mysqli_error($GLOBALS["___mysqli_ston"]));

mysqli_query($GLOBALS["___mysqli_ston"], "insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Academic Year $school_year')")or die(mysqli_error($GLOBALS["___mysqli_ston"]));
?>
<script>
window.location = "school_year.php";
</script>
<?php
}
}
?>