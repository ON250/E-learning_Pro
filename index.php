<?php
    session_start();
    include('config_database.php');
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Online Examination</title>
<link rel="shortcut icon" type="image/x-icon" href="ULK_logo.png" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
    <!--<script src="https://code.jquery/jquery-3.1.0.min.js"> </script>-->
  <script type="text/javascript" src="js/voting.js"></script>

<style type="text/css">
   #txt{
    position: relative;
  padding: 4px;
    width: 60%;
    border-radius: 5px;
    border: 1px solid #7ac9b7;
    color:black;

}
#tt{
    position: relative;
    padding: 4px;
    width: 19%;
    border-radius: 5px;
    border: 1px solid #7ac9b7;

}
#tx{
    position: relative;
  padding: 4px;
    width: 40%;
    border-radius: 5px;
    border: 1px solid #7ac9b7;

}
#xt{
    position: relative;
  padding: 4px;
    width: 20%;
    border-radius: 5px;
    border: 1px solid #7ac9b7;
    background-color: grey;
    text-decoration-color: none; 
    color: white; 
    margin-left: 40%;

}
#lab 
{
  position: relative;
  width: 30%;
}
#Add 
{
  position: relative;
  margin-left: 77%;
}

    </style>

</head>
<body  class ="container"  style="background-image: url('back.jpg');">
   <!--start php codes-->
      <?php

    //the login connection
    $msg='';
    
    if(isset($_POST['connexion'])){
      $email=htmlspecialchars($_POST['email']);
      $password=htmlspecialchars($_POST['password']);

      $query=mysqli_query($connect,"SELECT * FROM user WHERE email='$email' and password='$password' limit 1");
      if(mysqli_num_rows($query))
      {

        $get=mysqli_fetch_array($query);
        
        if($get['status']==1){
          $idd=$_SESSION['nn']=$get['user_id'];
          $_SESSION['nn']=$idd;
          $_SESSION['names']=$get['names'];
          $_SESSION['department_id']=$get['department_id'];
          $_SESSION['category_id']=$get['category_id'];
          
              header("location: dashboard.php");
              }
      else{
        echo '<script> alert("Your account is desactived, please contact your admnin!")</script>';
      }
      }
      else{
        $msg='Your email or password is incorrect !';
      }
    }


      ?>
<br><img src="ulk.png" style="text-align: center; margin-left: 25%; height: 95px;width: 600px;">
 
  <section id="main">



                 
                

               <div class="container">

                <div class="row">

 <div class="col-lg-10">

             <!-- OVERVIEW-->


             <div class="row">
               

                 
            </div>
                    <div class="col-md-6 col-md-offset-3">
                      <form id="login"  action="" method="POST" class="well " style="background:green;color:white;font-family:; margin-left: -25%; ">
                        <h3 class="col-md-offset-2" style="font-size:20px;font-family:garamond;margin-left: 30%;"><b>Online Examination System  </b></h3>
                        <!--<h3 class="col-md-offset-8" style="font-size:25px;font-family:garamond;margin-left: 45%;"><b>Login </b></h3>-->
                        <br>
                        
                                   <p>
                                      <label id="lab" > Email  </label>
                                        <input  id="txt"  type="email"  placeholder="Enter your email address to login " name="email" autofocus="" required="">
                                  </p>

                                  <p>
                                      <label id="lab" > Password     </label>
                                        <input  id="txt"  type="password"  placeholder="Enter your password to login " name="password" required="">
                                  </p>

                                   <p><input  style="font-style: bold;" id ="xt" type="submit" name="connexion" value="Login"></p> <br> 
                      
                      </form>


                    </div>
                </div>
                
             </div>

        </section> 

     
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"> </script>

 </body>
</html>