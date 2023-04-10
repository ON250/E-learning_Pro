<?php
		session_start();
    include('config_database.php');
		$data = $_POST['data'];
		$selexm=mysqli_query($connect,"SELECT * FROM course where course_id='".$_SESSION['course_id']."'");
      $see_COU=mysqli_fetch_array($selexm);
?>
		<center><B >Review of the Exam Of <?php echo $see_COU['course_name'];?> </B></center><br>
          
            <?php
 //select data from the database
       $countt=1;
       $course_id=$_SESSION['course_id'];
       $test_id=$_SESSION['test_id'];
       
                $select=mysqli_query($connect,"SELECT * FROM pass_exam inner join questions on pass_exam.question_id=questions.question_id where questions.exam_id = ".(int)$course_id." and  questions.test_id = ".(int)$test_id."  ");
              while($show1=mysqli_fetch_array($select))
                          {
?>
                            

  <div class="tab pull-left col-md-12" style="border-bottom: 1px solid grey;"><span><B>Question </B> <?php echo $countt .'  :  '. $show1['question']; ?>  ? </span><br>
    <span class="col-md-1 ">A.</span><span class="col-md-11"   ><?php echo $show1['as1']?> </span>
    <span class="col-md-1 "   >B.</span><span class="col-md-11"  ><?php echo $show1['as2']?> </span>
    <span class="col-md-1 " > C.</span><span class="col-md-11"  > <?php echo $show1['as3']?></span>
    <span class="col-md-1 "  > D.</span><span class="col-md-11"  ><?php echo $show1['as4']?> </span>
<br>
    <B style="color: green;font-family: serif;font-size: 15px;"><span class="col-md-3">Correct Answer : </span><span class="col-md-7" style="color: green;" ><?php echo $show1['p_answ']?> </span> </B><br>
    </div>
           <?php  $countt++;} ?>