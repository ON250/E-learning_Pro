<?php include("include/header.php");

//Getting the sessions
$class_id=$_SESSION['class_id'];
$course_id=$_SESSION['course_id'];
$day=$_SESSION['day'];
$colum_start_date='d'.$day.'_start_date';
  $colum_start_status='d'.$day.'_start_status';
  $colum_end_date='d'.$day.'_end_date';
  $colum_end_status='d'.$day.'_end_status';

//Tap the card to sign the attendance
//Get the student_code
$student_code=$_GET['status'];
if($student_code==0)
{
  $table_name='attendances'.$department_id.''.$class_id;
}
else
{
//Checking if this card exists in this class and in the database  --> students table
$queryc=mysqli_query($connect,"SELECT * FROM students where student_code='$student_code'");
if(mysqli_num_rows($queryc)>0){
  //Keep the student_id and roll_number
  $keep=mysqli_fetch_array($queryc);
  $student_id=$keep['student_id'];
  $roll_number=$keep['roll_number'];
  $department_id=$department_id;
  
  //Determine the attendances table 
  $table_name='attendances'.$department_id.''.$class_id;
  //Query to insert into the table
  $queryCheck=mysqli_query($connect,"SELECT * FROM ".$table_name." WHERE student_id='$student_id' and roll_number='$roll_number' and course_id='$course_id'");
  if(mysqli_num_rows($queryCheck)>0)
  {
  $findinf=mysqli_fetch_array($queryCheck);
  //If it exist

   if($day==1) {$status=$findinf['d1_start_status'];} else if($day==2) {$status=$findinf['d2_start_status'];} 
   else if($day==3) {$status=$findinf['d3_start_status'];}
  else if($day==4) {$status=$findinf['d4_start_status'];} else if($day==5) {$status=$findinf['d5_start_status'];}
  else if($day==6) {$status=$findinf['d6_start_status'];} else if($day==7) {$status=$findinf['d7_start_status'];}
  else if($day==8) {$status=$findinf['d8_start_status'];} else if($day==9) {$status=$findinf['d9_start_status'];}
  else if($day==10) {$status=$findinf['d10_start_status'];} else if($day==11) {$status=$findinf['d11_start_status'];}
  else if($day==12) {$status=$findinf['d12_start_status'];} else if($day==13) {$status=$findinf['d13_start_status'];}
  else if($day==14) {$status=$findinf['d14_start_status'];} else if($day==15) {$status=$findinf['d15_start_status'];}
  else if($day==16) {$status=$findinf['d16_start_status'];} else if($day==17) {$status=$findinf['d17_start_status'];}
  else if($day==18) {$status=$findinf['d18_start_status'];} else if($day==19) {$status=$findinf['d19_start_status'];}
  else if($day==20) {$status=$findinf['d20_start_status'];} else if($day==21) {$status=$findinf['d21_start_status'];}
  else if($day==22) {$status=$findinf['d22_start_status'];} else if($day==23) {$status=$findinf['d23_start_status'];}
  else if($day==24) {$status=$findinf['d24_start_status'];} else if($day==25) {$status=$findinf['d25_start_status'];}
  else if($day==26) {$status=$findinf['d26_start_status'];} else if($day==27) {$status=$findinf['d27_start_status'];}
  else if($day==28) {$status=$findinf['d28_start_status'];} else if($day==29) {$status=$findinf['d29_start_status'];}
  else if($day==30) {$status=$findinf['d30_start_status'];} 

    //If the student has already signn the first attendance 
    //Now after he will be allowed to sign the End Attendance

     if($day>=1 and  $status==2){
    $endAtt=mysqli_query($connect,"UPDATE ".$table_name." SET ".$colum_end_status."=5, ".$colum_end_date."=NOW() where student_id='$student_id' and course_id='$course_id' and roll_number='$roll_number'");
    if($endAtt){
    echo '<script>
      alert("Attendance was successfully! Okay '.$status.'")
        </script>';
      }
    }
    else if($day>=2 and  $status==0)
    { //From 2nd attendance it will keep both the start date status and the end date status
        $insAtt=mysqli_query($connect,"UPDATE ".$table_name."  SET ".$colum_start_status."=2,".$colum_start_date."= NOW() WHERE student_id='$student_id' and course_id='$course_id' and roll_number='$roll_number'");
    //And make some updates then
    $upE=mysqli_query($connect,"UPDATE ".$table_name." SET ".$colum_end_status."=-1 where student_id='$student_id' and course_id='$course_id' and roll_number='$roll_number'");
    if($insAtt)
          {
            echo '<script>
                alert("Attendance registered! ")
                  </script>';
          }
    else{echo '<script>
                alert("There is an error")
                  </script>';
          }
    }
    
    }
  else{ //Insert the attendance
    $insAtt=mysqli_query($connect,"INSERT INTO ".$table_name."(student_id,roll_number,course_id,".$colum_start_status.",".$colum_start_date.")  VALUES('$student_id','$roll_number','$course_id',2,NOW())");
    //And make some updates then
    $upE=mysqli_query($connect,"UPDATE ".$table_name." SET ".$colum_end_status."=-1 where student_id='$student_id' and course_id='$course_id' and roll_number='$roll_number'");
    if($insAtt)
          {
            echo '<script>
                alert("Attendance register was successfully! ")
                  </script>';
          }
    else{echo '<script>
                alert("There is an error")
                  </script>';
          }
  }
  }
}

?>

<body>
<!--php codes -->
  <?php 
    //inserting data into the database
    if(isset($_POST['enregistrer']))
    {
      $names=htmlspecialchars($_POST['faculty']);

      $chuse=mysqli_query($connect,"SELECT COUNT(*) as exist FROM faculty WHERE faculty_name='$names'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Faculty exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO faculty(faculty_name,c_date) values('$names',NOW())");
        if($enregistrer) {
        echo '<script>
                                alert("Faculty added successfully. Faculty name : '.$names.'")
                          </script>';
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
      $names=htmlspecialchars($_POST['faculty']);
      $idd=$_POST['iddd'];
      $chuse=mysqli_query($connect,"SELECT *,COUNT(*) as exist FROM faculty WHERE faculty_name='$names'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Faculty exists already!")
                          </script>';
      }
        else{

      $edit=mysqli_query($connect,"UPDATE faculty SET faculty_name='$names' WHERE faculty_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Faculty modified successfully!")
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
      
      $delete=mysqli_query($connect,"DELETE FROM faculty  WHERE faculty_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Faculty deleted successfully!")
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
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Attendances</i> </span>
	</div>

	<section>
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==0){
				?>
		<div class="col-lg-12">
			<button class="btn btn-info btn-xs col-lg-6" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Make the Attendance for today!</button>
		</div>
		<?php
			}
		?>
		<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <?php 
                    $profile=1;
                    if($profile===1){
                  ?>
                  <h2 style="font-family: serif;"><B><center>Please Tap the Student card to the Reader to register Student Attendance<br><span class="text-muted">For DAY <?php echo $day;?></span></center></B></h2>
                  <?php }
                  else { ?>
                  <div class="row" style="border: 1px solid grey;" >
                      <img src="<?php echo $view['photoprofile'];?>" alt="person" class="img-fluid rounded-circle col-md-2" style="height:100%;">
                      <div class="col-md-10" style="background: lightgrey; ">
                        
                      </div>
                    </div>
                <?php } ?>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Owner</th>
                          <th>Names</th>
                          <th>Roll Number</th>
                          <th>Profile</th>
                          <th>Date</th>
                          <th>Time In</th>
                          <th>Time Out</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        	<?php 
                        	$count=1;
                        	// select data from the database
                        	$sel=mysqli_query($connect,"SELECT *,DATE_FORMAT(".$colum_start_date.",'%d/%m/%Y') AS start_date,DATE_FORMAT(".$colum_start_date.",'%Hh %imin %ss') AS start_time,DATE_FORMAT(".$colum_end_date.",'%Hh %imin %ss') AS end_time,HOUR(".$colum_end_date.") AS cmpH,MINUTE(".$colum_end_date.") AS cmpMIN,SECOND(".$colum_end_date.") AS cmpSec,".$table_name.".roll_number as roll_numbers FROM ".$table_name." inner join students on students.student_id=".$table_name.".student_id where ".$colum_start_status."=2");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <th style="width: 10%;"><img style="width: 25%;height: 5%;" src="<?php echo $show['photoprofile'];?>"></th>
                          <td><?php echo $show['names'];?></td>
                          <th><?php echo $show['roll_numbers'];?></th>
                          <th></th>
                          <th><?php echo $show['start_date'];?></th>
                          <th><?php echo $show['start_time'];?></th>
                          <?php 
                            if($show['cmpH']==0 ){
                                ?>
                                <th class="text-danger"><small>No Out Tap</small></th>
                                <?php
                            }
                            else{
                          ?>
                          <th><?php echo $show['end_time'];?></th>
                          <?php } ?>
                          <th style="widows: 101px;">
                            <a style="text-decoration:none;color:white;width: 90px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#viewD'.$show['attendance_id'].'er"'; ?> > </span> View</span> </a></th>
                         
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
              <form  action="attend.php" class="form-group" style="shape-margin: 20px;">
              
                <div class="row">
                <label class="col-md-3">Class </label>
                <select name="class"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Class]--</option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM class");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['class_id'];?>"><?php echo $show111['class_name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Course </label>
                <select name="class"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Course]--</option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM course");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['course_id'];?>"><?php echo $show111['course_name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Day </label>
                <select name="class"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Day]--</option>

                   <option value="1" class="control">1st day of 5</option>
                   <option value="2" class="control">2nd day of 5</option>
                   <option value="3" class="control">3rd day of 5</option>
                   <option value="4" class="control">4th day of 5</option>
                   <option value="5" class="control">5th day of 5</option>
                
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Description </label>
                <input type="text" name="Description"  placeholder="Description" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info"  value="Make Attendance"></center>
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
                          $sel=mysqli_query($connect,"SELECT *,DATE_FORMAT(".$colum_start_date.",'%d/%m/%Y') AS start_date,DATE_FORMAT(".$colum_start_date.",'%Hh %imin %ss') AS start_time FROM ".$table_name." inner join students on students.student_id=".$table_name.".student_id inner join department on department.department_id=students.department_id inner join faculty on faculty.faculty_id=department.faculty_id");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="viewD'.$show['attendance_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                       
                        <form id="signup" method="post" action=""  class="well">
                <div class="row">
                <img class="col-md-5" src="<?php echo $show['photoprofile'];?>">
                <label class="col-md-7 text-upper" style="word-wrap: break-word;">
                   School     : <BIG><?php echo $show['faculty_name'];?></BIG><br>
                                                                        Department : <BIG><?php echo $show['department_name'];?></BIG><br>
                                                                        Names : <BIG><?php echo $show['names'];?></BIG><br>
                                                                        Roll Number : <BIG><?php echo $show['roll_number'];?></BIG><br>
                                                                      </label>
              </div><br>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show['attendance_id']; ?>" name="iddd">
                                   </div>
                    
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
                $select=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['faculty_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <label class="col-md-3">Faculty </label>
                <input type="text" name="faculty"  value="<?php echo $show1['faculty_name']; ?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['faculty_id']; ?>" name="iddd">
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