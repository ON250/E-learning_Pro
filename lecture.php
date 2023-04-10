<?php include("include/header.php");?>
<script >
  var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
    function call_lectures(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","sortbyclass.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("sort");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("sortclass").value;
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
      $names=htmlspecialchars($_POST['names']);
      $email=htmlspecialchars($_POST['email']);
      $phone=htmlspecialchars($_POST['phone']);
      $class=htmlspecialchars($_POST['class']);
      $department=$department_id;
      $status=$_POST['status'];
      $pin=0;
      $category=htmlspecialchars($_POST['category']);
      $ps="online-exam";
     
      $chuse=mysqli_query($connect,"SELECT COUNT(*) as existuser FROM user WHERE names='$names' or email='$email'");
      $SEEre=mysqli_fetch_array($chuse);

   if($SEEre['existuser']>=1){
        echo '<script>
                                alert("This Account exists already!")
                          </script>';
      }

      else {

      $enregistrer=mysqli_query($connect,"INSERT INTO user(names,email,phone,status,category_id,pin,password,c_date,class_id,department_id) values('$names','$email','$phone','$status','$category','$pin','$ps',NOW(),'$class','$department')");
        if($enregistrer) {
        echo '<script>
                                alert("Lecture added successfully. Default Password : '.$ps.'")
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
      $names=htmlspecialchars($_POST['names']);
      $email=htmlspecialchars($_POST['email']);
      $phone=htmlspecialchars($_POST['phone']);
      $class=htmlspecialchars($_POST['class']);
      $status=$_POST['status'];
      $category=htmlspecialchars($_POST['category']);
      $idd=$_POST['iddd'];
      if($idd==$_SESSION['nn'] and $status==0){
        echo '<script>
                      alert("This Account can\'t be Desactivate. it is used at this time!")
                          </script>';}
        else{

      $edit=mysqli_query($connect,"UPDATE user SET names='$names', email='$email', phone='$phone', status='$status', category_id='$category',class_id='$class' WHERE user_id='$idd'");

        if($edit) {
        echo '<script>
                                alert("Lecture modified successfully!")
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
      $ch_st=$_POST['ch_st'];
      if($idd==$_SESSION['nn']){
        echo '<script>
                      alert("This Account can\'t be delete . it is used at this time!")
                          </script>';}
        else{
      $delete=mysqli_query($connect,"DELETE FROM user  WHERE user_id='$idd'");
      if($delete) {
        echo '<script>
                                alert("Lecture deleted successfully!")
                          </script>';
                        }
        else{
          echo '<script>
                                alert("Operation has failed. PLease try again!")
                          </script>';
        }
    }
  }
  ?>
<!--end of php codes -->


  <div class="container-fluid " style="height: 50px; background: lightgrey"><br>
    <span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Lectures</i> </span>
  </div>

  <section>
    <?php 
      $chkid=$_SESSION['nn'];
      $chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
      $chkcateg=mysqli_fetch_array($chkcat);
      if($chkcateg['category_id']==4){
        ?>
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-6">
        <button class="btn btn-info btn-xs col-md-12" data-toggle="modal" data-target="#addnewuser"><i class="fa  fa-plus"> </i>  Add new Lecture</button>
      </div>
      <div class="col-md-5">
      <form method="post" action="">
        <div class="row" style="background:;border-radius: 8px;height: 23px;">
          <label style="font-family: serif;" class="col-md-2"><B>Sort by </B></label>

          <select id="sortclass" onchange="call_lectures();" style="font-family: sans-serif; font-size: 15px;" class="col-md-4 ">
           <option hidden="" value="">Select Class</option>
           <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
        </select>
      </div>
      </form>
    </div>
    </div>
    </div>
    <?php
      }
    ?>
    <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>List of the Lectures</small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Names</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Class</th>
                          <th>Status</th>

                        <?php
                          if($chkcateg['category_id']==4){
        ?>
                          <th>Actions</th>
                         <?php
      }
    ?>
                        </tr>
                      </thead>
                      <tbody id="sort">
                        
                          <?php 
                          $count=1;
                          // select data from the database
          
                          $sel=mysqli_query($connect,"SELECT * FROM user inner join  class on class.class_id=user.class_id  where category_id=2 and  class.department_id='$department_id'");
                          while($show=mysqli_fetch_array($sel))
                          {
                          ?>
                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['email'];?></td>
                          <td><?php echo $show['phone'];?></td>
                           <td><?php echo $show['class_name'].' / '.$show['section'];?></td>
                          <td><?php if($show['status']==0) echo "Desactivated"; else if($show['status']==1) echo '<span style="color:teal;">Activated</span>';?></td>
                   <?php       
                          if($chkcateg['category_id']==4){
        ?>
                          <td style="width: 120px;"> <small>
                            <a style="text-decoration:none;color:white;width: 48px; " class="btn btn-info btn-xs" href=""    data-toggle="modal"  <?php  echo 'data-target="#delete'.$show['user_id'].'er"'; ?> > </span> Delete</span> </a>

                           | <a style="text-decoration:none;color:white; width: 50px;"  href="" class="btn btn-info btn-xs"   data-toggle="modal"  <?php  echo 'data-target="#update'.$show['user_id'].'ers"'; ?> > </span> Modify</span> </a></small></td>
                           </tr>
                          <?php
                      }
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
                <label class="col-md-3">Names </label>
                <input type="text" name="names"  placeholder="Enter first and last name" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Email </label>
                <input type="email" name="email"  placeholder="Enter Email" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Phone </label>
                <input type="text" name="phone"  placeholder="Enter Phone Number" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <select name="category" hidden="" required=""  class="col-md-9 form-control">
                  <option value="2">lecture</option>
                </select>
              </div>
               <div class="row">
                <label class="col-md-3">Class </label>
                <select name="class"  required=""  class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select a Class]--</option>
                <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
                </select>
              </div><br>
               <div class="row">
                <label class="col-md-3">Status </label>
                <select name="status"  required=""  class="col-md-9 form-control">
                  <option value="1" class="control">Activate</option>
                  <option value="0">Desactivate</option>
                </select>
              </div><br>
              
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Register the Lecture"></center>
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
                          $sel=mysqli_query($connect,"SELECT * FROM user inner join  class on class.class_id=user.class_id where category_id=2");
                          while($show=mysqli_fetch_array($sel))
                          {
                          ?>
 <div class="modal fade" <?php  echo 'id="delete'.$show['user_id'].'er"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                       
                        <form id="signup" method="post" action=""  class="well">
              
                                   <center><p>Do you want to delete this Lecture? </p></center>
                                   <div class="form-group">
                                <?php
                                  if($show['status']==1) $md=0; else if($show['status']==0) $md=1;
                                ?>
                                     <input type="hidden" name="ch_st" value="<?php echo $md; ?>">
                                     <input type="hidden" value="<?php echo $show['user_id']; ?>" name="iddd">
                                   </div>
                    <center>          
                 <p><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Annuler</button>
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
       $select=mysqli_query($connect,"SELECT * FROM user inner join  class on class.class_id=user.class_id where category_id=2");
                          while($show1=mysqli_fetch_array($select))
                          {
                          ?>
 <div class="modal fade" <?php  echo 'id="update'.$show1['user_id'].'ers"';?>   tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <?php if($show1['status']==1) $disp='Posted'; else if($show1['status']==0) $disp='Not Posted';?>
                <div class="modal-header">
                  <h4 class="modal-title" id="myModalLabel">Admin Panel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    
                 </div>
                      <div class="modal-body">
                        <div class="" style="padding-right: 10px;">
                        <form id="signup" method="post" action=""  class="well">
            <div class="row">
                <label class="col-md-3">Names </label>
                <input type="text" name="names"  value="<?php echo $show1['names'];?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Email </label>
                <input type="email" name="email"  value="<?php echo $show1['email'];?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <label class="col-md-3">Phone </label>
                <input type="text" name="phone"  value="<?php echo $show1['phone'];?>" required="" autofocus="" class="col-md-9 form-control">
              </div><br>
              <div class="row">
                <select name="category"  hidden="" required=""  class="col-md-9 form-control">
                  <option value="2" class="control">lecture</option>
                </select>
              </div>
              <div class="row">
                <label class="col-md-3">Class </label>
                <select name="class"  required=""  class="col-md-9 form-control">
                   <option value="<?php echo $show11['class_id'];?>" class="control" hidden=""><?php echo $show1['class_name'].' / '.$show11['section'];?></option>
                <?php 
                  $fgf=mysqli_query($connect,"SELECT * FROM class where department_id='$department_id' order by section asc");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['class_id'];?>"><?php echo $show11['class_name'].' / '.$show11['section'];?></option>
                <?php } ?>
                </select>
              </div><br>
               <div class="row">
                <label class="col-md-3">Status </label>
                <select name="status"  required=""  class="col-md-9 form-control">
                  <option value="<?php echo $show1['status'];?>" hidden=""><?php if($show1['status']==1) echo 'Activer'; else if($show1['status']==0) echo 'Désactiver';?></option>
                  <option value="1" class="control">Activer</option>
                  <option value="0">Désactiver</option>
                </select>
              </div><br>
              
                                   <div class="form-group">
                                     <input type="hidden" value="<?php echo $show1['user_id']; ?>" name="iddd">
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