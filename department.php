<?php include("include/header.php");?>
<script type="text/javascript">
  function call(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","pretDetails.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("membre").value;
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
      $department=htmlspecialchars($_POST['Department']);
      $faculty=htmlspecialchars($_POST['Faculty']);

      $chuse=mysqli_query($connect,"SELECT COUNT(*) as exist FROM department WHERE department_name='$department'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Department exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO department(department_name,faculty_id,c_date) values('$department','$faculty',NOW())");
        if($enregistrer) {
        echo '<script>
                                alert("Department added successfully. Department name : '.$department.'")
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
      $department=htmlspecialchars($_POST['Department']);
      $faculty=htmlspecialchars($_POST['Faculty']);
      $idd=$_POST['iddd'];
      $chuse=mysqli_query($connect,"SELECT *,COUNT(*) as exist FROM department WHERE department_name='$department'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Department exists already!")
                          </script>';
      }
        else{

      $edit=mysqli_query($connect,"UPDATE department SET department_name='$department',faculty_id='$faculty' WHERE department_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Department modified successfully!")
                          </script>';
                        }
        else{
          echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
        }
}
      
    }
    //codes to delete user
    if(isset($_POST['delete']))
    {
      $idd=$_POST['iddd'];
      
      $delete=mysqli_query($connect,"DELETE FROM department  WHERE department_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Department deleted successfully!")
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
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Department</i> </span>
	</div>

	<section>
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==1){
				?>
		<div class="col-lg-12">
			<button class="btn btn-info btn-xs col-lg-6" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Add  new Department</button>
		</div>
		<?php
			}
		?>
		<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>List od the Department</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Faculty</th>
                          <th>Department</th>
                        <?php
                          if($chkcateg['category_id']==1){
				?>
                          <th>Actions</th>
                         <?php
			}
		?>
                        </tr>
                      </thead>
                      <tbody>
                        
                        	<?php 
                        	$count=1;
                        	// select data from the database
                        	$sel=mysqli_query($connect,"SELECT * FROM department inner  join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['faculty_name'];?></td>
                          <td><?php echo $show['department_name'];?></td>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['department_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['department_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
                           </tr>
                          <?php
                      
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
                <label class="col-md-3">Faculty </label>
                <select name="Faculty"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="" class="control"  hidden="">--[Select a Faculty]--</option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM faculty");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['faculty_id'];?>"><?php echo $show111['faculty_name'];?></option>
                <?php } ?>
                </select>
              </div><br>

              <div class="row">
                <label class="col-md-3">Department </label>
                <input type="text" name="Department"  placeholder="Enter the name of the Department." required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Department"></center>
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
                        	$sel=mysqli_query($connect,"SELECT * FROM department inner  join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['department_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                       
                        <form id="signup" method="post" action=""  class="well">
              
                                   <center><p>Do you want to delete this Class? </p></center>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show['department_id']; ?>" name="iddd">
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
                $select=mysqli_query($connect,"SELECT * FROM department inner  join faculty on department.faculty_id=faculty.faculty_id");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['department_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                        <div class="" style="padding-right: 10px;">
                        <form id="signup" method="post" action=""  class="well">
            <div class="row">
                <label class="col-md-3">Faculty </label>
                <select name="Faculty"  required="" id="classlect" onchange="call_lect();" class="col-md-9 form-control">
                   <option value="<?php echo $show1['faculty_id']; ?>" class="control"  hidden=""><?php echo $show1['faculty_name']; ?></option>
                <?php 
                  $fgf1=mysqli_query($connect,"SELECT * FROM faculty");
                  while($show111=mysqli_fetch_array($fgf1)){ ?>
                  <option value="<?php echo $show111['faculty_id'];?>"><?php echo $show111['faculty_name'];?></option>
                <?php } ?>
                </select>
              </div><br>

              <div class="row">
                <label class="col-md-3">Department </label>
                <input type="text" name="Department"  value="<?php echo $show1['department_name']; ?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['department_id']; ?>" name="iddd">
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