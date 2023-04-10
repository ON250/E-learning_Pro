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
        XMLHttpRequestObject.open("POST","lecturedet.php");
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
    function call_lect_b(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","lecturedet_b.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see_l_b");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("class_b").value;
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
    
    function call_class(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","sortbycourse.php");
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
</script>
<body>
<!--php codes -->
  <?php 
    //inserting data into the database
    if(isset($_POST['enregistrer']))
    {
      $class=htmlspecialchars($_POST['class']);
      $lecture=htmlspecialchars($_POST['lecture']);
      $course=htmlspecialchars($_POST['course']);
      $duration=htmlspecialchars($_POST['duration']);
      $days=(int)($duration/8);
      $chuse=mysqli_query($connect,"SELECT COUNT(*) as existuser FROM course WHERE course_name='$class' and class_id='$class'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['existuser']>=1){
        echo '<script>
                                alert("This Course exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO course(course_name,class_id,lecture_id,hours,days,c_date) values('$course','$class','$lecture','$duration','$days',NOW())");
        if($enregistrer) {
        echo '<script>
                                alert("Course added successfully. Course Name : '.$course.'")
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
     $class=htmlspecialchars($_POST['class']);
      $lecture=htmlspecialchars($_POST['lecture']);
      $course=htmlspecialchars($_POST['course']);
      $duration=htmlspecialchars($_POST['duration']);
      $days=(int)($duration/8);
      $idd=$_POST['iddd'];
      

      $edit=mysqli_query($connect,"UPDATE course SET course_name='$course', class_id='$class', lecture_id='$lecture', hours='$duration', days='$days' WHERE course_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Course modified successfully!")
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
      $ch_st=$_POST['ch_st'];

      $delete=mysqli_query($connect,"DELETE FROM course  WHERE course_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Course deleted successfully!")
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
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Courses</i> </span>
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
        <div class="col-md-6">
        <button class="btn btn-info btn-xs col-md-12" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Add new Course</button>
      </div>
      <div class="col-md-5" style="background: ;border-radius: 8px;height: 25px;">
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
                  <h2 style="font-family: serif;"><small>List of the Courses</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Class</th>
                          <th>Courses</th>
                          <th>Lecture</th>
                          <th>Hours</th>
                          <th>Days</th>
                        <?php
                          if($chkcateg['category_id']==4){
				?>
                          <th>Actions</th>
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
 if($chkcateg['category_id']==4){ $ff="SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id inner join department on department.department_id=class.department_id where class.department_id='$department_id' order by class.section asc";}
 else { $ff="SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id inner join department on department.department_id=class.department_id where user.class_id='$idk'";}
                        	$sel=mysqli_query($connect,$ff);
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['hours'];?> <span>Hours</span></td>
                          <td><?php echo $show['days'];?> <span>Days</span></td>
			             <?php
                          if($chkcateg['category_id']==4){
        ?>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['course_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['course_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
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
                <select name="class"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Class]--</option>
                <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l">
                <label class="col-md-3">Lecture </label>
                <select name="lecture"  required=""  class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select a Lecture]--</option>
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Course </label>
                <input type="text" name="course"  placeholder="Enter Name of the Course " required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Duration </label>
                <select name="duration"  required=""  class="col-md-9 form-control">
                   <option value="48" class="control" >48 Hours</option>
                   <option value="50" class="control" >50 Hours</option>
                   <option value="72" class="control" >72 Hours</option>
                   <option value="80" class="control" >80 Hours</option>
                   <option value="100" class="control" >100 Hours</option>
                   <option value="120" class="control" >120 Hours</option>
                </select>
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Course"></center>
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
                        	$sel=mysqli_query($connect,"SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id ");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['course_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                     <input type="hidden" value="<?php echo $show['course_id']; ?>" name="iddd">
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
                $select=mysqli_query($connect,"SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id ");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['course_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <label class="col-md-3">Class </label>
                <select name="class"  required="" id="class_b" onchange="call_lect_b();" class="col-md-9 form-control">
                   <option value="<?php echo  $show1['class_id']?>" class="control"  hidden=""><?php echo  $show1['class_name']?></option>
                <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
                </select>
              </div><br>
              <div class="row" id="see_l_b">
                <label class="col-md-3">Lecture </label>
                <select name="lecture"  required=""  class="col-md-9 form-control">
                   <option value="<?php echo  $show1['user_id']?>" class="control" hidden=""><?php echo  $show1['names']?></option>
               
                </select>
              </div><br>
              <div class="row">
                <label class="col-md-3">Course </label>
                <input type="text" name="course"  value="<?php echo  $show1['course_name']?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Duration </label>
                <select name="duration"  required=""  class="col-md-9 form-control">
                  <option value="<?php echo $show1['hours'];?>" hidden><?php echo $show1['hours'];?> Hours</option>
                   <option value="50" class="control" >50 Hours</option>
                   <option value="80" class="control" >80 Hours</option>
                   <option value="100" class="control" >100 Hours</option>
                   <option value="120" class="control" >120 Hours</option>
                </select>
              </div><br>
              
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['course_id']; ?>" name="iddd">
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