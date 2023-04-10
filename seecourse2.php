<?php
  session_start();
	include("config_database.php");
  $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
	$class=$_POST['data'];
  $department=$_SESSION['department_id'];
	$selectt=mysqli_query($connect,"SELECT * FROM course inner join class on class.class_id=course.class_id inner join user on user.class_id=class.class_id where user.user_id='$id' and course.class_id='$class'");

?>
                <label class="col-lg-3 ">Course</label>
                <select name="course_ids"  required=""  class="col-lg-9 form-control">
                  <option value="" hidden="">--[Select a Course]--</option>
                  <?php
                  	while($seePret=mysqli_fetch_array($selectt))
                  	{
                  ?>
                  		<option value="<?php echo $seePret['course_id'];?>"><?php echo $seePret['course_name']; ?></option>
                  <?php } 

                  ?>

                </select>
         