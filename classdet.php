<?php
	include("config_database.php");
	$department_id=$_POST['data'];

	$selectt=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id'");

?>
                <label class="col-lg-3 ">Class</label>
                <select name="class_name"  required=""   class="col-lg-9 form-control">
                  <option value="" hidden="">--[Select a Class]--</option>
                  <?php
                  	while($seePret=mysqli_fetch_array($selectt))
                  	{
                  ?>
                  		<option value="<?php echo $seePret['class_id'];?>"><?php echo $seePret['class_name'].' / '.$seePret['section']; ?></option>
                  <?php } 

                  ?>

                </select>
         