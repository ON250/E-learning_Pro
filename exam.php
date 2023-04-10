<?php include("include/header.php");?>
<script type="text/javascript">
  var XMLHttpRequestObject=false;
    if(window.XMLHttpRequest){
      XMLHttpRequestObject=new XMLHttpRequest();
    }else if(window.ActiveXObject){
      XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
    }
  function call_exam(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","pass_exams.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see");
          divsee.innerHTML=datar;
        }
        
        }
        var data='1';
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
    function pass_exam(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","view_qts.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("viewqts");
          divsee.innerHTML=datar;
        }
        
        }
        var data=document.getElementById("exam").value;
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
    function add_exam(){
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","add_exams.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          var divsee=document.getElementById("see");
          divsee.innerHTML=datar;
        }
        
        }
        var data='1';
        XMLHttpRequestObject.send('data='+data);
      }
      return false;
    }
    function course_idd(){
      var course=document.getElementById("course").value;
      return course;
    }
</script>
<body>

	<div class="container-fluid " style="height: 50px; background: lightgrey"><br>
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Exams</i> </span>
	</div>
<div class="container" style="padding-top: 5%; margin-left: 35%;">
  <div class="row">
    <div class="col-md-3 col-offset-3 col-sm-3 col-xs-12">
     
  
  <form method="post" action="" class="form-group" style="shape-margin: 20px;">
              <div class="row">
                <label class="col-md-3">Course </label>
                <select name="course" id="course" required=""  class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select a Course]--</option>
                <?php 
                          $count=1;
                          $idk=$view['class_id'];
                  $fgf=mysqli_query($connect,"SELECT * FROM course inner join user on user.class_id=course.class_id where user.user_id='$id'");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11['course_id'];?>"><?php echo $show11['course_name'];?></option>
                <?php } ?>
                </select>
              </div><br>

                <div class="row">
                <label class="col-md-3">Test  </label>
                <select name="test"  required="" id="type" class="col-md-9 form-control">
                   <option value="" class="control" hidden="">--[Select test Type]--</option>
                <?php 
                  $fgf=mysqli_query($connect, "SELECT * FROM test ");
                  while($show11=mysqli_fetch_array($fgf)){ ?>
                  <option value="<?php echo $show11[0];?>"><?php echo $show11[1];?></option>
                <?php } ?>
                </select>
              </div><br>
              
              <center><button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancel</button>
                <input type="submit" class="btn btn-sm btn-info" name="enregistrer" value="Submit"></center>
            </form>
             <?php
                if(isset($_POST['enregistrer'])){
                  $_SESSION['course_id']=$course_id=$_POST['course'];
                  $_SESSION['test_id']=$test_id=$_POST['test'];

                  $chhjj=mysqli_query($connect,"SELECT * FROM pass_exam where course_id='".$_POST['course']."' and test_id='".$_POST['test']."' and student_id='$id'");
                  if(mysqli_num_rows($chhjj)>0) { header("location: action_page.php");$_SESSION['exams_id']=0; }
                  else {
                    //CHEK If there is any questions
                    $chx=mysqli_query($connect,"SELECT * FROM questions where exam_id='".$_POST['course']."' and test_id='".$_POST['test']."'");
                    if(mysqli_num_rows($chx)>0)
                      {//record the exam
                                            $recexam=mysqli_query($connect,"INSERT INTO exams(course_id,test_id,student_id,class_id,exa_p_date) VALUES('$course_id','$test_id','$id','$class_id',NOW())");

                                            $take_exam_id=mysqli_query($connect,"SELECT * from exams order by exams_id desc limit 1");
                                            $e_i=mysqli_fetch_array($take_exam_id);
                                            //session for the exam id
                                            $_SESSION['exams_id']=$e_i['exams_id'];
                                            if($recexam){
                                              header('location:quiz.php');}
                      }
                      else{
                        if($test_id==1) $tes='FAT'; else if($test_id==2) $tes='CAT2';
                        echo '<script>alert("No Exam found for '.$tes.' of this Course!")</script>';
                      }
                   }
                  
                }
             ?>
     
        
    </div>
</div>
</div>
<?php
 ob_end_flush()
 ?>
</body>
