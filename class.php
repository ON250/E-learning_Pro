<?php include("include/header.php");?>
<script type="text/javascript">
  function call_depart(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","facDepart.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see_depart");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("faculty").value;
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
</script>
<body>
<!--php codes -->
  <?php 
    //inserting data into the database
    if(isset($_POST['enregistrer']))
    {
      $class=htmlspecialchars($_POST['class_name']);
      $section=htmlspecialchars($_POST['section']);
      $department=htmlspecialchars($_POST['Department']);

      $chuse=mysqli_query($connect,"SELECT COUNT(*) as existclass FROM class WHERE class_name='$class' and section='$section' and department_id='$department'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['existclass']>=1){
        echo '<script>
                                alert("This Class exists already!")
                          </script>';
      }

      else {
        //Insert data into the table class
      $enregistrer=mysqli_query($connect,"INSERT INTO class(class_name,section,department_id,c_date) values('$class','$section','$department',NOW())");
        if($enregistrer) {
          //Create the table Attendaces for this class 
          $fid=mysqli_query($connect,"SELECT class_id from class order by class_id desc limit 1");
          $getid=mysqli_fetch_array($fid);
          $class_id=$getid['class_id'];
          //table name = 'Attendances'.$dep.''.$class_id
          $table_name=$department.''.$class_id;
    $att=mysqli_query($connect,"CREATE TABLE Attendances".$table_name." 
( `attendance_id` INT NOT NULL AUTO_INCREMENT ,`student_id` INT NOT NULL ,`roll_number` INT NOT NULL,`course_id` INT NOT NULL,
  `d1_start_status` INT NOT NULL , `d1_start_date` DATETIME NOT NULL ,`d1_end_status` INT NOT NULL , `d1_end_date` DATETIME NOT NULL ,
  `d2_start_status` INT NOT NULL , `d2_start_date` DATETIME NOT NULL ,`d2_end_status` INT NOT NULL , `d2_end_date` DATETIME NOT NULL ,
  `d3_start_status` INT NOT NULL , `d3_start_date` DATETIME NOT NULL ,`d3_end_status` INT NOT NULL , `d3_end_date` DATETIME NOT NULL ,
  `d4_start_status` INT NOT NULL , `d4_start_date` DATETIME NOT NULL ,`d4_end_status` INT NOT NULL , `d4_end_date` DATETIME NOT NULL ,
  `d5_start_status` INT NOT NULL , `d5_start_date` DATETIME NOT NULL ,`d5_end_status` INT NOT NULL , `d5_end_date` DATETIME NOT NULL ,
  `d6_start_status` INT NOT NULL , `d6_start_date` DATETIME NOT NULL ,`d6_end_status` INT NOT NULL , `d6_end_date` DATETIME NOT NULL ,
  `d7_start_status` INT NOT NULL , `d7_start_date` DATETIME NOT NULL ,`d7_end_status` INT NOT NULL , `d7_end_date` DATETIME NOT NULL ,
  `d8_start_status` INT NOT NULL , `d8_start_date` DATETIME NOT NULL ,`d8_end_status` INT NOT NULL , `d8_end_date` DATETIME NOT NULL ,
  `d9_start_status` INT NOT NULL , `d9_start_date` DATETIME NOT NULL ,`d9_end_status` INT NOT NULL , `d9_end_date` DATETIME NOT NULL ,
  `d10_start_status` INT NOT NULL , `d10_start_date` DATETIME NOT NULL ,`d10_end_status` INT NOT NULL , `d10_end_date` DATETIME NOT NULL ,
  `d11_start_status` INT NOT NULL , `d11_start_date` DATETIME NOT NULL ,`d11_end_status` INT NOT NULL , `d11_end_date` DATETIME NOT NULL ,
  `d12_start_status` INT NOT NULL , `d12_start_date` DATETIME NOT NULL ,`d12_end_status` INT NOT NULL , `d12_end_date` DATETIME NOT NULL ,
  `d13_start_status` INT NOT NULL , `d13_start_date` DATETIME NOT NULL ,`d13_end_status` INT NOT NULL , `d13_end_date` DATETIME NOT NULL ,
  `d14_start_status` INT NOT NULL , `d14_start_date` DATETIME NOT NULL ,`d14_end_status` INT NOT NULL , `d14_end_date` DATETIME NOT NULL ,
  `d15_start_status` INT NOT NULL , `d15_start_date` DATETIME NOT NULL ,`d15_end_status` INT NOT NULL , `d15_end_date` DATETIME NOT NULL ,
  `d16_start_status` INT NOT NULL , `d16_start_date` DATETIME NOT NULL ,`d16_end_status` INT NOT NULL , `d16_end_date` DATETIME NOT NULL ,
  `d17_start_status` INT NOT NULL , `d17_start_date` DATETIME NOT NULL ,`d17_end_status` INT NOT NULL , `d17_end_date` DATETIME NOT NULL ,
  `d18_start_status` INT NOT NULL , `d18_start_date` DATETIME NOT NULL ,`d18_end_status` INT NOT NULL , `d18_end_date` DATETIME NOT NULL ,
  `d19_start_status` INT NOT NULL , `d19_start_date` DATETIME NOT NULL ,`d19_end_status` INT NOT NULL , `d19_end_date` DATETIME NOT NULL ,
  `d20_start_status` INT NOT NULL , `d20_start_date` DATETIME NOT NULL ,`d20_end_status` INT NOT NULL , `d20_end_date` DATETIME NOT NULL ,
  `d21_start_status` INT NOT NULL , `d21_start_date` DATETIME NOT NULL ,`d21_end_status` INT NOT NULL , `d21_end_date` DATETIME NOT NULL ,
  `d22_start_status` INT NOT NULL , `d22_start_date` DATETIME NOT NULL ,`d22_end_status` INT NOT NULL , `d22_end_date` DATETIME NOT NULL ,
  `d23_start_status` INT NOT NULL , `d23_start_date` DATETIME NOT NULL ,`d23_end_status` INT NOT NULL , `d23_end_date` DATETIME NOT NULL ,
  `d24_start_status` INT NOT NULL , `d24_start_date` DATETIME NOT NULL ,`d24_end_status` INT NOT NULL , `d24_end_date` DATETIME NOT NULL ,
  `d25_start_status` INT NOT NULL , `d25_start_date` DATETIME NOT NULL ,`d25_end_status` INT NOT NULL , `d25_end_date` DATETIME NOT NULL ,
  `d26_start_status` INT NOT NULL , `d26_start_date` DATETIME NOT NULL ,`d26_end_status` INT NOT NULL , `d26_end_date` DATETIME NOT NULL ,
  `d27_start_status` INT NOT NULL , `d27_start_date` DATETIME NOT NULL ,`d27_end_status` INT NOT NULL , `d27_end_date` DATETIME NOT NULL ,
  `d28_start_status` INT NOT NULL , `d28_start_date` DATETIME NOT NULL ,`d28_end_status` INT NOT NULL , `d28_end_date` DATETIME NOT NULL ,
  `d29_start_status` INT NOT NULL , `d29_start_date` DATETIME NOT NULL ,`d29_end_status` INT NOT NULL , `d29_end_date` DATETIME NOT NULL ,
  `d30_start_status` INT NOT NULL , `d30_start_date` DATETIME NOT NULL ,`d30_end_status` INT NOT NULL , `d30_end_date` DATETIME NOT NULL ,
              PRIMARY KEY (`attendance_id`)) ENGINE = InnoDB");
    if($att){
        echo '<script>
                                alert("Class added successfully. Class name : '.$class.'")
                          </script>';
            }
            else {
               echo '<script>
                                alert("Error")
                          </script>';
            }
      }
      else{
        echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
      }
    }
    }

    //for update
    if(isset($_POST['update']))
    {
      $class=htmlspecialchars($_POST['class_name']);
      $section=htmlspecialchars($_POST['section']);
      $department=htmlspecialchars($_POST['Department']);
      $idd=$_POST['iddd'];
      $chuse=mysqli_query($connect,"SELECT COUNT(*) as existclass FROM class WHERE class_name='$class' and section='$section' and department_id='$department'");
      $SEEre=mysqli_fetch_array($chuse);
   if($SEEre['existclass']>=1){
        echo '<script>
                                alert("This Class exists already!")
                          </script>';
      }
        else{

      $edit=mysqli_query($connect,"UPDATE class SET class_name='$class',section='$section',department_id='$department' WHERE class_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Class modified successfully!")
                          </script>';
                        }
        else{
          echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
        }
}
      
    }
    //codes to delete user
    if(isset($_POST['delete']))
    {
      $idd=$_POST['iddd'];
      
      $delete=mysqli_query($connect,"DELETE FROM class  WHERE class_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Class deleted successfully!")
                          </script>';
                        }
        else{
          echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
        }
    
  }
  ?>
<!--end of php codes -->


	<div class="container-fluid " style="height: 50px; background: lightgrey"><br>
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Classes</i> </span>
	</div>

	<section>
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==1){
				?>
		<div class="col-lg-12">
			<button class="btn btn-info btn-xs col-lg-6" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Add a new Class</button>
		</div>
		<?php
			}
		?>
		<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>List od the Classes</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Faculty</th>
                          <th>Department</th>
                          <th>Section</th>
                          <th>Class</th>
                        <?php
                          if($chkcateg['category_id']==1){
				?>
                          <th>Actions</th>
                         <?php
			}
		?>
                        </tr>
                      </thead>
                      <tbody>
                        
                        	<?php 
                        	$count=1;
                        	// select data from the database
                        	$sel=mysqli_query($connect,"SELECT * FROM class inner join department on department.department_id=class.department_id inner join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['faculty_name'];?></td>
                          <td><?php echo $show['department_name'];?></td>
                          <td><?php echo $show['section'];?></td>
                          <td><?php echo $show['class_name'];?></td>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['class_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['class_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
                           </tr>
                          <?php
                      
                     $count++;
			}
		?>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	</section>

	<?php include('include/footer.php');?>

<!--MODALS -->
	 <!--modal to add new user-->
      <!-- aDD User-->
    <div class="modal fade" id="addnewuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header"><h4 class="modal-title" id="myModalLabel">Admin Panel</h4></div>
          <div class="modal-body">
           <div class="" style="padding-right: 10px;">
              <form method="post" action="" class="form-group" style="shape-margin: 20px;">
              <div class="row">
                <label class="col-md-3">Department </label>
                <select name="Department"  required=""  class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Department]--</option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM department");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['department_id'];?>"><?php echo $show111['department_name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l">
                <label class="col-md-3">Section </label>
                <select name="section"  required=""  class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select a Section]--</option>
                   <option value="Day">Day</option>
                   <option value="Evening">Evening</option>
                   <option value="Evening">Weekend</option>
                </select>
              </div><br>

              <div class="row">
                <label class="col-md-3">Class </label>
                <input type="text" name="class_name"  placeholder="Enter the name of the Class." required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Class"></center>
            </form>
           </div>
          </div>
        </div>
      </div>
    </div>
    <!--end  add new user-->

    <!--start modal to delete user-->
    	   <!--modal to delete User-->
      <?php
 //select data from the database
                        	$count=1;
                        	// select data from the database
                        	$sel=mysqli_query($connect,"SELECT * FROM class inner join department on department.department_id=class.department_id inner join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['class_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                       
                        <form id="signup" method="post" action=""  class="well">
              
                                   <center><p>Do you want to delete this Class? </p></center>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show['class_id']; ?>" name="iddd">
                                   </div>
                    <center>          
                 <p><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                  <input  type="submit" style="background: rgb(58,155,235); color: white;" name="delete" value="Confirmer" class="btn btn-info btn-sm" >
                     </p> </center>  
                         </form>  

                         <?php
                              
                         ?>

                    <div class="modal-footer">               
                     
                    </div>
                </div>
         
       </div>
     </div>
   </div>
   <?php } ?>
   	<!--end modal to delete user-->

   	<!--start update user-->
       <?php
 //select data from the database
                $select=mysqli_query($connect,"SELECT * FROM class inner join department on department.department_id=class.department_id inner join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['class_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                        <div class="" style="padding-right: 10px;">
                        <form id="signup" method="post" action=""  class="well">
            <div class="row">
                <label class="col-md-3">Department </label>
                <select name="Department"  required=""  class="col-md-9 form-control">
                   <option value="<?php echo $show1['department_id']; ?>" class="control"  hidden=""><?php echo $show1['department_name']; ?></option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM department");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['department_id'];?>"><?php echo $show111['department_name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l">
                <label class="col-md-3">Section </label>
                <select name="section"  required=""  class="col-md-9 form-control">
                   <option value="<?php echo $show1['section']; ?>" class="control" hidden=""><?php echo $show1['section']; ?></option>
                   <option value="Day">Day</option>
                   <option value="Evening">Evening</option>
                   <option value="Evening">Weekend</option>
                </select>
              </div><br>

              <div class="row">
                <label class="col-md-3">Class </label>
                <input type="text" name="class_name"  value="<?php echo $show1['class_name']; ?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['class_id']; ?>" name="iddd">
                                   </div>
                    <center>          
                 <p><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                  <input  type="submit" style="background: rgb(58,155,235); color: white;" name="update" value="Modify" class="btn btn-info btn-sm" >
                     </p> </center>  
                         </form>  
                       </div>
                         <?php
                              
                         ?>

                    <div class="modal-footer">               
                     
                    </div>
                </div>
         
       </div>
     </div>
   </div>  <!-- END OF THE Fourth MODAL OF REGISTERING ASSETS-->
 

 <?php }
 ?>

</body>