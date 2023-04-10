<?php session_start(); 
 $id=$_SESSION['nn'];  
 include('config_database.php');

              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);

              $_SESSION['student_id']=$student_id=$view['user_id'];
              $course_id=$_SESSION['course_id'];
              $test_id=$_SESSION['test_id'];
              $exams_id=$_SESSION['exams_id'];
              $data=$_POST['data'];
   			  list($response,$question_id,$preview_right_ans)=explode('|', $data);

   			  $sld=mysqli_query($connect,"SELECT count(*) as nb_quest FROM questions where exam_id='$course_id' and test_id='$test_id' ");
   			  $div_moy=mysqli_fetch_array($sld);

   			  $self=mysqli_query($connect,"SELECT *  FROM questions where exam_id='$course_id' and test_id='$test_id' and question_id='$question_id'");
   			  $div_p_a=mysqli_fetch_array($self);

   			  $nb=$div_p_a['p_answ'];
   			  $hh=$response;
              if($nb==$hh ){
              	$result=100;
              }
              else{
              	$result=0;
              }

              $ver=mysqli_query($connect,"SELECT * FROM pass_exam where course_id='$course_id' and test_id='$test_id' and question_id='$question_id' and student_id='$student_id'");
              if(mysqli_num_rows($ver)<=0){
              //insert data into the database
              $ins=mysqli_query($connect,"INSERT INTO pass_exam(exams_id,course_id,test_id,student_id,question_id,response,result,pass_date) 
              											 VALUES('$exams_id','$course_id','$test_id','$student_id','$question_id','$response',$result,NOW())");
          }
              	//make sessions

?>