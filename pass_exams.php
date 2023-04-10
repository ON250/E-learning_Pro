<?php session_start();  $id=$_SESSION['nn'];  include('config_database.php');
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];?>
     
<br><div class="container " style="background: lightgrey;">
	<center><h1 style="font-family: serif;"><B>Pass the Exam Now</B></h1>
		<form method="post" action="">
			<div class="row">
				<I class="col-md-2"></I>
			<label class="col-md-1"><B>Exam </B></label>
                
                	<select name="exam" id="exam"  required=""  class="col-md-5 form-control">
                   <option value="" class="control" hidden="">--[Select an Exam]--</option>
                <?php 
                $lff=$view['class_id'];
                  $fgfll=mysqli_query($connect,"SELECT * FROM exam inner join course on course.course_id=exam.course_id inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id where user.class_id='$lff'");
                  while($show110=mysqli_fetch_array($fgfll)){ ?>
                  <option value="<?php echo $show110['exam_id'];?>"><?php echo $show110['exam_subject'];?></option>
                <?php } ?>
                </select>
               <input type="button"  class="btn col-md-2" onclick="pass_exam();" style="background: teal;color: white;" name="pass_exammm" value="Pass This Exam">
              </div>
		</form>
	</center><hr>
	<div class="row pull-center" style="padding-left: 2%;" id="viewqts">
		
	</div><br><br>

	<div id="res">
		<em style="text-align: justify;" class="text-muted">Please first select the exam that you will going to pass and click on Pass This Exam. After you must follow Instrustions and the order of questions.</em>
	</div>
	
</div>

<script type="text/javascript">
     	var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
  
     </script>