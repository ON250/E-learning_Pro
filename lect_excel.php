<?php  session_start();
//if($_SESSION['nn']=="") header("location:index.php"); else if($_SESSION['category_id']==0) header("location:index.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<?php
	include("config_database.php");
   $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
              $class_id=$view['class_id'];
                          $idk=$view['class_id'];
	 $requete="SELECT *,test.Name as test_name,DATE_FORMAT(exa_p_date,'%d/%m/%Y') AS exa_date FROM exams  inner join course on exams.course_id=course.course_id inner join user on exams.student_id=user.user_id inner join test on test.ID=exams.test_id  where user.class_id='$idk'";
	 $selE=mysqli_query($connect,$requete);

   $cl=mysqli_query($connect,"SELECT * FROM class where class_id='$class_id'");
	 $see_cl=mysqli_fetch_array($cl);
   $class_name=$see_cl['class_name'];
	$output='';

	$output.='<table class="table table-striped  table-bordered table-sm table" border="1" >
                     <thead>
                    <tr>
                      <th colspan="6">Report of Exam Passed on Class of '.$class_name.'</th>
                    </tr>
                        <tr>
                          <th>#No</th>
                          <th>Date</th>
                          <th>Student</th>
                          <th>Course</th>
                          <th>Type Of Exam</th>
                          <th>Marks</th> 
                       
                         </tr>
                      </thead>
                      <tbody style="font-size: 13px;font-family: sans-serif;">';
                      $count=1;
	while($show=mysqli_fetch_array($selE))
	{
    
		$output.='
<tr>
                          <th scope="row">'. $count.'</th>
                        <th style="text-align:left;">'.$show['exa_date'].'</th>
                          <td>'.$show['names'].'</td>
                          <td>'.$show['course_name'].'</td>
                        <td>'.$show['test_name'].' </td>
                          <td>'.$show['marks'].' %</td>
                          
                           </tr>';
                           $count++;
}
	$output.='
                    </table>'; 

	header("Content-Type: application/xls");
	header("Content-Disposition: attachment; filename=rapport_cotisations.xls");

	echo $output;
?>
</body>
</html>