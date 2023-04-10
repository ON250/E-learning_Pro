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
                        	// select data from the database
 if($chkcateg['category_id']==4){ $ff="SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id where  course.class_id='$class'";}
 else { $ff="SELECT * FROM course inner join user on user.user_id=course.lecture_id inner join class on class.class_id=course.class_id where user.class_id='$idk' ";}
                        	$sel=mysqli_query($connect,$ff);
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th style="width: 10px;"><?php echo $count;?></th>
                          <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['hours'];?></td>
                          <td><?php echo $show['days'];?></td>
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
			$slk=mysqli_query($connect,"SELECT class_name,section from class where class_id='$class'");
				$seecls=mysqli_fetch_array($slk);
				$cls=$seecls['class_name'];
        $section=$seecls['section'];
			if(mysqli_num_rows($sel)==0) {
				
			 	echo '<em class="text-danger">No Course found in <strong>'.$cls.' / '.$section.'</strong> Class.</em>';}
			 
		?>
