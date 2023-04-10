 <?php
 session_start();
 include("config_database.php");
 $class=$_POST['data'];
 $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
              $class_id=$view['class_id'];
              $department_id=$view['department_id'];
  $chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);

                        	$count=1;
                          $idk=$view['class_id'];

                        	 $ff="SELECT *,DATE_FORMAT(exam_date,'%d/%m/%Y') AS exam_d,exam.status as stat FROM exam inner join course on course.course_id=exam.course_id inner join class on class.class_id=exam.class_id inner join department on department.department_id=exam.department_id inner join test on exam.test=test.ID inner join user on user.user_id=course.lecture_id where exam.department_id='$department_id' and exam.status!=1 and course.class_id='$class'";

                          $sel=mysqli_query($connect,$ff);
                          while($show=mysqli_fetch_array($sel))
                          {
                          ?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['Name'];?></td>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['duration'];?> <span>Hours</span></td>
                          <td><?php echo $show['exam_d'];?></td>
                   <?php
                          if($show['stat']==2){ ?>
                          <td style="width: 135px;"> <strong class="text-danger">Exam Sent</strong></td>
                           </tr>
                          <?php
                      }
                      else if($show['stat']==4){ ?>
                          <td style="width: 135px;"> <strong class="text-info">Exam Confirmed</strong></td>
                           </tr>
                          <?php
                        }
                     $count++;
      }
            
			$slk=mysqli_query($connect,"SELECT class_name,section from class where class_id='$class'");
				$seecls=mysqli_fetch_array($slk);
				$cls=$seecls['class_name'];
        $section=$seecls['section'];
			if(mysqli_num_rows($sel)==0) {
				
			 	echo '<em class="text-danger">No Course found in <strong>'.$cls.' / '.$section.'</strong> Class.</em>';}
			 
		?>
