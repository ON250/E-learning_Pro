<?php
  session_start();
	include("config_database.php");
	$class=$_POST['data'];
  $department=$_SESSION['department_id'];
	$selectt=mysqli_query($connect,"SELECT * FROM course inner join class on class.class_id=course.class_id where class.department_id='$department' and course.class_id='$class'");

?>
                <label class="col-lg-3 ">Course</label>
                <select name="course"  required=""  class="col-lg-9 form-control">
                  <option value="" hidden="">--[Select a Course]--</option>
                  <?php
                  	while($seePret=mysqli_fetch_array($selectt))
                  	{
                  ?>
                  		<option value="<?php echo $seePret['course_id'];?>"><?php echo $seePret['course_name']; ?></option>
                  <?php } 

                  ?>

                </select>
         