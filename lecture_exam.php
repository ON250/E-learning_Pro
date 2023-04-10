<?php include("include/header.php");?>
<script >
  var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
  function call_lect(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","seecourse.php");
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
    function call_class(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","sortbyexamE.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("sort");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("sortclass").value;
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
    function call_courses(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","sortbycourse.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see_cours");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("course_name").value;
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
      $class=htmlspecialchars($_POST['classlect']);
      $course=htmlspecialchars($_POST['course']);
      $test=htmlspecialchars($_POST['test']);
      $duration=htmlspecialchars($_POST['duration']);
      $exam_date=htmlspecialchars($_POST['exam_date']);
      $department=$_SESSION['department_id'];
      $hod_id=$id;
      $status=1;

      $chuse=mysqli_query($connect,"SELECT COUNT(*) as exist FROM exam WHERE course_id='$course' and class_id='$class' and department_id='$department' and test='$test'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Exam exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO exam(course_id,class_id,department_id,hod_id,duration,test,status,exam_date,c_date) 
        values('$course','$class','$department','$hod_id','$duration','$test','$status','$exam_date',NOW())");
        if($enregistrer) {
          $slet=mysqli_query($connect,"SELECT * FROM course where course_id='$course'");
          $slettest=mysqli_query($connect,"SELECT * FROM test where ID='$test'");
          $viewC=mysqli_fetch_array($slet);
          $viewT=mysqli_fetch_array($slettest);
        echo '<script>
                                alert("Exam registered successfully. Exam : '.$viewT['Name'].' of  '.$viewC['course_name'].'")
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
    if(isset($_POST['sendExam']))
    {
      $idd=$_POST['iddd'];
      $status=2;

      $edit=mysqli_query($connect,"UPDATE exam SET status='$status' WHERE exam_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Exam sent to the Recover Staff successfully!")
                          </script>';
                        }
        else{
          echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
        }
}
    //codes to delete user
    if(isset($_POST['delete']))
    {
      $idd=$_POST['iddd'];

      $delete=mysqli_query($connect,"DELETE FROM exam  WHERE exam_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Exam deleted successfully!")
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
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Exams</i> </span>
	</div>

	<section>
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==4){
				?>
		<div class="col-lg-12">
      <div class="row">
      <div class="col-md-5" style="background:;border-radius: 8px;height: 25px;">
			<form method="post" action="">
        <div class="row" style="">
          <label style="font-family: serif;" class="col-md-2"><B>Sort by </B></label>

          <select id="sortclass" onchange="call_class();" style="font-family: sans-serif; font-size: 15px;" class="col-md-4 ">
           <option hidden="" value="">Select Class</option>
           <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
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
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>List of the Exams</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Class</th>
                          <th>Courses</th>
                          <th>Test</th>
                          <th>Exam Date</th>
                          <th>Duration</th>
                        <?php
                          if($chkcateg['category_id']==2){
				?>
                          <th>Observation</th>
                         <?php
			}
		?>
                        </tr>
                      </thead>
                      <tbody id="sort">
                        
                        	<?php 
                        	$count=1;
                          $idk=$view['class_id'];
                        	// select data from the database
 if($chkcateg['category_id']==2){ 

  $ff="SELECT *,DATE_FORMAT(exam_date,'%d/%m/%Y') AS exam_d,exam.status as stat FROM exam inner join course on course.course_id=exam.course_id inner join class on class.class_id=exam.class_id inner join department on department.department_id=exam.department_id inner join test on exam.test=test.ID inner join user on user.user_id=course.lecture_id where course.lecture_id='$id' ";
}
                        	$sel=mysqli_query($connect,$ff);
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['Name'];?></td>
                          <td><?php echo $show['duration'];?> <span>Hours</span></td>
                          <td><?php echo $show['exam_d'];?></td>
			             <?php
                          if($show['stat']==4){ ?>
                          <td style="width: 130px;"> <strong class="text-info">Exam Confirmed</strong></td>
                           </tr>
                          <?php
                        }
                         else { ?>
                          <td style="width: 120px;"> <strong class="text-danger">Exam Established</strong></td>
                           </tr>
                          <?php
                      }
                       
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
                <label class="col-md-3">Class </label>
                <select name="classlect"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Class]--</option>
                <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l">
                <label class="col-md-3">Course </label>
                <select name="course"  required=""  class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select a Course]--</option>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Test </label>
                <select name="test"  required=""  class="col-md-9 form-control">
                   <option value="CAT2" class="control" hidden="">--[Select a Test]--</option>
                   <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM test");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['ID'];?>"><?php echo $show11['Name'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Duration </label>
                <select name="duration"  required=""  class="col-md-9 form-control">
                   <option value="2" class="control" >2 Hours</option>
                   <option value="3" class="control" >3 Hours</option>
                   <option value="4" class="control" >4 Hours</option>
                   <option value="5" class="control" >5 Hours</option>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Date of Exam </label>
                <input type="date" name="exam_date" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Exam"></center>
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
                        	$sel=mysqli_query($connect,"SELECT *,DATE_FORMAT(exam_date,'%d/%m/%Y') AS exam_d FROM exam inner join course on course.course_id=exam.course_id inner join class on class.class_id=exam.class_id inner join department on department.department_id=exam.department_id inner join test on exam.test=test.ID inner join user on user.user_id=course.lecture_id where exam.department_id='$department_id' and exam.status=1 and exam.status=1");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['exam_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                       
                        <form id="signup" method="post" action=""  class="well">
              
                                   <center><p>Do you want to delete this Course? </p></center>
                                   <div class="form-group">
                                <?php
                                  if($show['status']==1) $md=0; else if($show['status']==0) $md=1;
                                ?>
                                     <input type="hidden" name="ch_st" value="<?php echo $md; ?>">
                                     <input type="hidden" value="<?php echo $show['exam_id']; ?>" name="iddd">
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
                $select=mysqli_query($connect,"SELECT *,DATE_FORMAT(exam_date,'%d/%m/%Y') AS exam_d FROM exam inner join course on course.course_id=exam.course_id inner join class on class.class_id=exam.class_id inner join department on department.department_id=exam.department_id inner join test on exam.test=test.ID inner join user on user.user_id=course.lecture_id where exam.department_id='$department_id' and exam.status=1");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="sendexam'.$show1['exam_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <?php if($show1['status']==1) $disp='Posted'; else if($show1['status']==0) $disp='Not Posted';?>
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                        <div class="" style="padding-right: 10px;">
                        <form id="signup" method="post" action=""  class="well">
            <div class="row">
                <label class="col-md-12">Confirm to send this Exam : <strong><?php echo $show1['Name']. '</strong> of <strong>'.$show1['course_name'];?></strong> to the Recover Staff!</label>
              </div>
              
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['exam_id']; ?>" name="iddd">
                                   </div>
                    <center>          
                 <p><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                  <input  type="submit" style="background: rgb(58,155,235); color: white;" name="sendExam" value="Confirm to send Exam" class="btn btn-info btn-sm" >
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