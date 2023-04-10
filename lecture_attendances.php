<?php include("include/header.php");

?>
<script >
  var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
  function call_lect(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","seecourse2.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see_l");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("classlect").value;
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
</script>
<body>
<!--php codes -->
  <?php 
    //inserting data into the database  enregistreratt
    if(isset($_POST['enregistreratt'])){
      $_SESSION['class_id']=$class_id=$_POST['class_ids'];
      $_SESSION['course_id']=$course_id=$_POST['course_ids'];
      $_SESSION['day']=$day=$_POST['days'];
      $_SESSION['Description']=$_POST['Description'];

      header("location: attend.php?status=0");
    }
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
			if($chkcateg['category_id']==2){
				?>
		<div class="col-lg-12">
			
      <div class="row">
        <div class="col-md-6">
        <button class="btn btn-info btn-xs col-lg-12" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Make the Attendance for today!</button>
      </div>
      <div class="col-md-5" style="background: ;border-radius: 8px;height: 25px;">
      <form method="post" action="">
        <div class="row" style="">
          <label style="font-family: serif;" class="col-md-2"><B>Sort by </B></label>

          <select id="sortclass" onchange="call_class();" style="font-family: sans-serif; font-size: 15px;" class="col-md-4 ">
           <option hidden="" value="">Select Course</option>
           <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM course where lecture_id='$id' ");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['course_id'];?>"><?php echo $show11['course_name'];?></option>
                <?php } ?>
        </select>
      </div>
      </form>
    </div>
    </div>
		</div>
		<?php
			}
		?>
		<div class="col-lg-12">
      <?php
              //check if the lecture teach only one course
                          $chc=mysqli_query($connect,"SELECT *,COUNT(*) AS chcnb from course inner join class on course.class_id=class.class_id where lecture_id='$id'");
                          $viewnb=mysqli_fetch_array($chc);
                          $nbcourse=$viewnb['chcnb'];
                          $course_id=$viewnb['course_id'];
                          $course_name=$viewnb['course_name'];
                          $class_id=$viewnb['class_id'];
                          $class_name=$viewnb['class_name'];
                          $department=$department_id;
                          if($nbcourse==1){
                          //check if there exist any attendance done or if attendance of  this course has started
                          $table_name='attendances'.$department.''.$class_id;
                          $ats=mysqli_query($connect,"SELECT * FROM ".$table_name." where course_id='$course_id'");
                          if(mysqli_num_rows($ats)>0){
                            $cck=1;
                          }
                          else{
                            $cck=0;
                          }
                        }

       ?>
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;" class="row">
                    <?php
                      if($cck==0){
                    ?>
                    <small class="col-md-5">Course : <strong><?php echo $viewnb['course_name'];?></strong> </small>
                    <small class="col-md-5"><B>Attendance List </B></small>
                    <small class="col-md-2">Class  : <strong><?php echo $viewnb['class_name'];?></strong>  <span class=" alert-info pull-right" style="padding-left: 1%;padding-right: 1%; font-size: 14px;font-family: serif;"> 105 </span></small>
                  <?php } else if($cck==0) {?>
                      <small class="col-md-5">Attendance List </small>
                  <?php } ?>
                  </h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Roll Number</th>
                          <th>Names</th>
                          <th>Day1</th>
                          <th>Day2</th>
                          <th>Day3</th>
                          <th>Day4</th>
                          <th>Day5</th>
                          <th>Day6</th>
                          <th>Day7</th>
                          <th>Day8</th>
                          <th>Day9</th>
                          <th>Day10</th>
                        <?php
                          if($chkcateg['category_id']==2){
        ?>
                          <th>Points</th>
                         <?php
      }
    ?>
                        </tr>
                      </thead>
                      <tbody>
                        
                        	<?php 
                        	$count=1;
                          

                          if($nbcourse==1){
                        	// select data from the database
                        	$sel=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td></td>
                          <th><?php echo $nbcourse; ?></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <td></td>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                      </tr>
                          <?php
                      
                     $count++;
			}
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
                <label class="col-md-3">Class </label>
                <select name="class_ids"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="<?php echo $class_id;?>" class="control"  hidden=""><?php echo $class_name;?></option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM class inner join user on user.class_id=class.class_id where user.user_id='$id'");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['class_id'];?>"><?php echo $show111['class_name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l">
                <label class="col-md-3">Course </label>
                <select name="course_ids"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="<?php echo $course_id;?>" class="control"  hidden=""><?php echo $course_name;?></option>
               
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Day </label>
                <select name="days"  required="" id="classlect" class="col-md-9 form-control">
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
                <input type="submit" class="btn btn-sm btn-info" name="enregistreratt" value="Make Attendance"></center>
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
                          $sel=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['faculty_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                     <input type="hidden" value="<?php echo $show['faculty_id']; ?>" name="iddd">
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