<?php
	include("config_database.php");
	$faculty=$_POST['data'];

	$selectt=mysqli_query($connect,"SELECT * FROM department where faculty_id='$faculty'");

?>
                <label class="col-lg-3 ">Department</label>
                <select name="Department"  required="" id="depClass" onchange="call_cls();"  class="col-lg-9 form-control">
                  <option value="" hidden="">--[Select a Department]--</option>
                  <?php
                  	while($seePret=mysqli_fetch_array($selectt))
                  	{
                  ?>
                  		<option value="<?php echo $seePret['department_id'];?>"><?php echo $seePret['department_name']; ?></option>
                  <?php } 

                  ?>

                </select>
         