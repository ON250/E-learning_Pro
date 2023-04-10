<?php include("include/header.php");?>
<script type="text/javascript">
  var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
  function review(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","review.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("review");
          divsee.innerHTML=datar;
        }
        
        }
        var data='review';
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }

  </script>
<body>
<!--php codes -->
<?php
      $course_id=$_SESSION['course_id'];
       $test_id=$_SESSION['test_id'];
        $exams_id=$_SESSION['exams_id'];
 //update the exams marks
  $sslk=mysqli_query($connect,"SELECT * FROM exams where course_id = ".(int)$course_id." and  test_id = ".(int)$test_id." and  student_id = ".(int)$id." and exams_id=".$exams_id."");
  $vie_r=mysqli_fetch_array($sslk);

?>
 
	<div class="container-fluid " style="height: 50px; background: lightgrey"><br>
    <?php  

                $select=mysqli_query($connect,"SELECT *,COUNT(*) as nb_qs FROM questions where exam_id = ".(int)$course_id." and  test_id = ".(int)$test_id."  ");
                $shwow=mysqli_fetch_array($select);

                 $select_cor=mysqli_query($connect,"SELECT *,COUNT(*) as nb_corr_ans FROM pass_exam where course_id = ".(int)$course_id." and  test_id = ".(int)$test_id." and  student_id = ".(int)$id." and result=100 ");
                $shwow_corr=mysqli_fetch_array($select_cor);

               $select_wrong=mysqli_query($connect,"SELECT *,COUNT(*) as nb_wrong_ans FROM pass_exam where course_id = ".(int)$course_id." and  test_id = ".(int)$test_id." and  student_id = ".(int)$id." and result=0 ");
                $shwow_wrong=mysqli_fetch_array($select_wrong);

                //general marks
                $rs=$shwow_corr['nb_corr_ans'] * 100;
                $general_m=$rs/$shwow['nb_qs'];
                $conver=number_format($general_m,2,'.','');
                //ipdate
                if($vie_r['marks']==""){
                    $upd=mysqli_query($connect,"UPDATE exams SET marks='$conver' where exams_id='$exams_id'");
                }//fin update
   
       $selexm=mysqli_query($connect,"SELECT * FROM course where course_id='".$_SESSION['course_id']."'");
      $see_COU=mysqli_fetch_array($selexm);
    ?>
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Result Of <?php echo $see_COU['course_name'];?> </i> </span>
	</div>

<div class="container" style="padding-top: 4%; margin-left: 14%;">
  <div class="row">
    <div class="col-md-9 col-offset-3 col-sm-3 col-xs-12" style="background: lightgrey;">
        <div class="container-fluid" id="review">
          <center><B >Report Of The Exam's Result </B></center><br>
          <div class="row" style="border-bottom: 1px solid grey;">
            <span class="col-md-9">Number of Questions : </span> <span class="col-md-3 text-info"> <?php echo $shwow['nb_qs'];?></span>
          </div>
          <div class="row" style="border-bottom: 1px solid grey;">
            <span class="col-md-9">Number of Correct Answers : </span> <span class="col-md-3 text-primary"> <?php echo $shwow_corr['nb_corr_ans'];?></span>
          </div>
           <div class="row" style="border-bottom: 1px solid grey;">
            <span class="col-md-9">Number of Wrong Answers : </span> <span class="col-md-3 text-danger"> <?php echo $shwow_wrong['nb_wrong_ans'];?></span>
          </div>
          <div class="row" style="border-bottom: 1px solid grey;">
            <span class="col-md-9">General Marks : </span> <span class="col-md-3 text-info"> <?php echo $conver;?> <B>%</B></span>
          </div>
            <br>
          <center>
            <form method="post" action="student_report.php">
            <button type="button" onclick="review();" class="btn btn-info btn-xs col-md-8" style="color: lightgrey;"><B>Get The Review</B></button>
                  <button type="submit" name="export" class="btn btn-info btn-xs col-lg-2" ><i class="fa  fa-print fa-lg"> Export Pdf</i></button>
            </form>
        </center>

          <?php
              //theseb are sessions
          $_SESSION['course_name']=$see_COU['course_name'];
          $_SESSION['nb_qtions']=$shwow['nb_qs'];
          $_SESSION['nb_coreect']=$shwow_corr['nb_corr_ans'];
          $_SESSION['nb_wrong']=$shwow_wrong['nb_wrong_ans'];
          $_SESSION['general']=$conver;

          ?>

          
        </div>
      
    </div>
</div>
</div>

 
 <?php 
 ob_end_flush()
 ?>
</body>
