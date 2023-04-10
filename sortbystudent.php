 <?php
 session_start();
 include("config_database.php");
 $class=$_POST['data'];
 $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
              $class_id=$view['class_id'];
  $chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);

                        	$count=1;
                          $idk=$view['class_id'];
                          $sel=mysqli_query($connect,"SELECT * FROM user  inner join  class on class.class_id=user.class_id inner join department on user.department_id=department.department_id inner join faculty on faculty.faculty_id=department.faculty_id where category_id=3 and user.class_id='$class'");
                          while($show=mysqli_fetch_array($sel))
                          {
                          ?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <th scope="row"><?php echo $show['roll_number'];?></th>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['email'];?></td>
                          <td><?php echo $show['phone'];?></td>
                          <td><?php echo $show['faculty_name'];?></td>
                          <td><?php echo $show['department_name'];?></td>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php if($show['status']==0) echo "Desactivated"; else if($show['status']==1) echo '<span style="color:teal;">Activated</span>';?></td>
                   <?php       
                          if($chkcateg['category_id']==1){
        ?>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['user_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['user_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
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
				
			 	echo '<em class="text-danger">No Student found in <strong>'.$cls.' / '.$section.'</strong> Class.</em>';}
			 
		?>
