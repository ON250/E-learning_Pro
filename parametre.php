<?php include('include/header.php');?>
  <body>

    <?php

    	$pictureMsg='';
    	$msg='';

if(isset($_POST['submit']))
{
$p_id=$_SESSION['nn'];
$user=$_SESSION['names'];
$oldpass=$_POST['cpass'];
$sql=mysqli_query($connect,"SELECT password FROM  user where user_id='".$_SESSION['nn']."' and password='".$oldpass."' limit 1");
$num=mysqli_fetch_array($sql);

if(mysqli_num_rows($sql))
{
	$npass=$_POST['npass'];
	$cpass=$_POST['cfpass'];

  if(strlen($npass)<=5) {echo '<script>alert("Your Password must contain more than 5 caracters !")</script>';
}
	else if($npass==$cpass){
 $con=mysqli_query($connect,"UPDATE user set password='$npass'  where user_id='".$_SESSION['nn']."'");
$msg='<em style="color:green;font-size:12px;">Your Password has been changed successfully!</em>';
}
else echo '<script>alert("The  Password to Confirm and Your New Password are not identical !")</script>';

}
else
{
$msg='<em style="color:maroon;font-size:12px;">Current Password is incorrect!</em>';
}
}


if(isset($_POST['savePict']))
            {
              $name=$_FILES['photoprofile']['name'];
              $ext=strrchr($name, '.');
              $tmp_name = $_FILES['photoprofile']['tmp_name'];
              $photoprofile = 'img/'.$name;
              $valables = array('.jpg','.JPG','.PNG','.png');
              if($name!=''){
                if(in_array($ext, $valables)){
                  move_uploaded_file($tmp_name, $photoprofile);
                  //Enregistrement dans la base de donnee
                  $change=mysqli_query($connect,"UPDATE user SET photoprofile='$photoprofile' WHERE user_id='$id' ");
                  if($change)
                $msg='<em style="color: green;">Your Profile has been changed successfully !</em>';
                }
                else echo '<script>alert("Please Choose a Picture!")</script>';
              }
             }

//pour le telechargement de la photo
              //Si  la photo est changee 
            
        
          $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
?>
        <div class="container-fluid " style="height: 50px; background: lightgrey"><br>
    <span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Paramètre</i> </span>

<br>
   
  </div>

      <!-- Header Section-->
      <section class="dashboard-header section-padding row">
      	<div class="sidenav-header-inner text-center col-md-3"><img src="<?php echo $view['photoprofile'];?>" style="height: 200px;" alt="person" class="img-fluid rounded-circle">
            <?php 
            $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
            ?>
            <h2 class="" style="width: 300px;">
            	<form method="POST" enctype="multipart/form-data" action="">
            	<center><input type="file" name="photoprofile" placeholder="Changer votre mot de passe" style="width: 97%; font-size: 65%;border:1px solid grey;"><input type="submit" class="btn btn-info" name="savePict" value="Enregistrer"></center>
            	</form>
            </h2>
             
          </div>
          <div class="col-md-9">
          	<form method="POST" style="padding-right: 10px;">
          		<span style="font-size: 19px;">Change Password </span><br><br>
          		<div class="form-group row text-muted">
															<label for="exampleInputEmail1" class="col-md-3">
																Current Password
															</label>
							<input type="password" name="cpass" class="form-control col-md-8" required="" autofocus="" placeholder="">
														</div>
														<div class="form-group row text-muted">
															<label for="exampleInputPassword1" class="col-md-3">
																New Password
															</label>
					<input type="password" name="npass" class="form-control col-md-8" required=""  placeholder="">
														</div>
														
<div class="form-group row text-muted">
															<label for="exampleInputPassword1" class="col-md-3">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control col-md-8" required=""  placeholder="">
														</div>
														
													<center>	<button type="submit" name="submit" class="btn btn-o btn-info">
															Enregistrer
														</button></center>
          	</form>
          </div>
        <div class="container-fluid">
          <center><?php echo $msg;?></center>
        </div>
      </section>
      <!--footer -->
      <?php include("include/footer.php");?>
    </div>
    
  </body>
</html>