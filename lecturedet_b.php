<?php
	include("config_database.php");
	$class=$_POST['data'];

	$selectt=mysqli_query($connect,"SELECT * FROM user where class_id='$class' and category_id=2");

?>
                <label class="col-lg-3 ">Lecture</label>
                <select name="lecture"  required=""  class="col-lg-9 form-control">
                  <?php
                  	while($seePret=mysqli_fetch_array($selectt))
                  	{
                  ?>
                  		<option value="<?php echo $seePret['user_id'];?>"><?php echo $seePret['names']; ?></option>
                  <?php } 

                  ?>

                </select>
         