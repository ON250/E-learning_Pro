<?php
 session_start();
 include("config_database.php");
 $count=$_POST['data'];
 $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
              $class_id=$view['class_id'];
              $department_id=$_SESSION['department_id'];
$data=$_POST['data'];
$ff="SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id inner join department on department.department_id=class.department_id where class.department_id='$department_id' order by class.section asc";
$sel=mysqli_query($connect,$ff);
                          $show=mysqli_fetch_array($sel);
                          ?>
                       <tr id="sort" >
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                         <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['hours'];?> <span>Hours</span></td>
                          <td><?php echo $show['days'];?> <span>Days</span></td>
                   <?php
        ?>
                          <td style="width: 120px;" id="selc" > 
                              <a href="" class="text-info" style="text-decoration: none;">Close</a>
                 </td>
                           </tr>

                           <tr style="font-size: 20px;font-family: serif;background: lightblue;">
<th></th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
						</tr>
						<tr style="font-size: 20px;font-family: serif;background: lightblue;">
<th></th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
<th>1</th>
						</tr>