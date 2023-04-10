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
      $names=htmlspecialchars($_POST['faculty']);

      $chuse=mysqli_query($connect,"SELECT COUNT(*) as exist FROM faculty WHERE faculty_name='$names'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Faculty exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO faculty(faculty_name,c_date) values('$names',NOW())");
        if($enregistrer) {
        echo '<script>
                                alert("Faculty added successfully. Faculty name : '.$names.'")
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
      $names=htmlspecialchars($_POST['faculty']);
      $idd=$_POST['iddd'];
      $chuse=mysqli_query($connect,"SELECT *,COUNT(*) as exist FROM faculty WHERE faculty_name='$names'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['exist']>=1){
        echo '<script>
                                alert("This Faculty exists already!")
                          </script>';
      }
        else{

      $edit=mysqli_query($connect,"UPDATE faculty SET faculty_name='$names' WHERE faculty_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Faculty modified successfully!")
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
      
      $delete=mysqli_query($connect,"DELETE FROM faculty  WHERE faculty_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Faculty deleted successfully!")
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
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Faculties</i> </span>
	</div>

	<section>
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==1){
				?>
		<div class="col-lg-12">
			<button class="btn btn-info btn-xs col-lg-6" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Add new Faculty</button>
		</div>
		<?php
			}
		?>
		<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>List od the Faculties</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Faculty</th>
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
                        	$sel=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['faculty_name'];?></td>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['faculty_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['faculty_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
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
                <input type="text" name="faculty"  placeholder="Enter the name of the Faculty." required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Faculty"></center>
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
                          $sel=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show=mysqli_fetch_array($sel))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['faculty_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                     <input type="hidden" value="<?php echo $show['faculty_id']; ?>" name="iddd">
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
                $select=mysqli_query($connect,"SELECT * FROM faculty");
                        	while($show1=mysqli_fetch_array($select))
                        	{
                        	?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['faculty_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                <input type="text" name="faculty"  value="<?php echo $show1['faculty_name']; ?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['faculty_id']; ?>" name="iddd">
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