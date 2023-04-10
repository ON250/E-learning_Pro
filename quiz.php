<?php include("include/header.php");
?>
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
</script>

<?php
    //function to insert the exams passed
    function insert_passed_exam(){
        echo '<script>alert("Tu es meiller Ezpk")</script>';
      
    }
?>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}





h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 65%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>
<!--php codes -->
	<div class="container-fluid " style="height: 50px; background: lightgrey"><br>
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Pass Exam Now</i> </span>
    <span class="pull-right" style="border-radius: 1px 2px 1px teal;height: 23px;color: #FF1493;"> <!-- THIS IS THE CLOCK-->
                         <script type="text/javascript">
                              document.write ('<span id="date-time">', new Date().toLocaleString(),'<\/span>.<\/p>')
                              if (document.getElementById) onload = function () {
                                setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
                              }
                            </script></span>
	</div>
<div class="container" style="padding-top: 1%; margin-left: 17%;">
  <div class="row">
    <div class="col-md-3 col-offset-3 col-sm-3 col-xs-12">
     
   
<form id="regForm" style="width: 700px;" method="post" action="action_page.php">
  <center>
  <h3><strong></strong></h3>
  </center>
  <!-- One "tab" for each step in the form: -->

       <?php
 //select data from the database
       $countt=1;
       $course_id=$_SESSION['course_id'];
       $test_id=$_SESSION['test_id'];
       
                $select=mysqli_query($connect,"SELECT * FROM questions where exam_id = ".(int)$course_id." and  test_id = ".(int)$test_id."  ");
              while($show1=mysqli_fetch_array($select))
                          {
                            
                          ?>
                          <script type="text/javascript">
                            <?php $title='pass_exam'.$countt.'()'; $funct=' function '.$title; $idsee='see'.$countt; $scr_id_see='var vid="see'.$countt.'";';
                            
                            $ids='answer'.$countt;  $scr_id_value='var id_value="'.$ids.'";';
                            $question_id='question_id'.$countt;  $scr_question_id='var id_question_id="'.$question_id.'";';
                            $right_ans='right_ans'.$countt;  $scr_right_ans='var id_right_ans="'.$right_ans.'";';

                        echo $funct ?>   {
      if(XMLHttpRequestObject){
        XMLHttpRequestObject.open("POST","save_answer.php");
        XMLHttpRequestObject.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        XMLHttpRequestObject.onreadystatechange=function(){

        if(XMLHttpRequestObject.readyState==4 && XMLHttpRequestObject.status==200){
          var datar=XMLHttpRequestObject.responseText;
          <?php echo $scr_id_see;?>
          var divsee=document.getElementById(vid);
          divsee.innerHTML=datar;
        }
        
        }
        <?php echo $scr_id_value;?>
        <?php echo $scr_question_id;?>
        <?php echo $scr_right_ans;?>
        var right_ans=document.getElementById(id_right_ans).value;
        var resp=document.getElementById(id_value).value;
        var ques=document.getElementById(id_question_id).value;

        var Mdata= resp + '|' + ques + '|' + right_ans + '|';
        XMLHttpRequestObject.send('data='+ Mdata);
      }
      return false;
    }
                       
     

                          </script>
                          
                          <div class="row">

  <div class="tab pull-left col-md-12"><span><B>Question </B></span> <?php echo $countt .'  :  '. $show1['question']; ?>  ? <br>
    <span class="col-md-1 ">A.</span><span class="col-md-11"><?php echo $show1['as1']?> </span>
    <span class="col-md-1 ">B.</span><span class="col-md-11"><?php echo $show1['as2']?> </span>
    <span class="col-md-1 ">C.</span><span class="col-md-11"><?php echo $show1['as3']?> </span>
    <span class="col-md-1 ">D.</span><span class="col-md-11"><?php echo $show1['as4']?> </span>
           <br>
    <label class="col-md-7 text-muted" >Select your <?php echo $scr_id_value;?> right Assertion</label>         
    <select name="ass" class="col-md-4" onchange="<?php echo $title; ?>" id="<?php echo $ids; ?>" >
      <option value="" hidden="">Assertions </option>
      <option value="<?php echo $show1['as1'];?>"><B>A</B> </option>
      <option value="<?php echo $show1['as2'];?>"><B>B</B> </option>
      <option value="<?php echo $show1['as3'];?>"><B>C</B> </option>
      <option value="<?php echo $show1['as4'];?>"><B>D</B> </option>
    </select>
      <input type="text" hidden="" value="<?php echo $show1['question_id'];?>" name="question_id" id="<?php echo $question_id; ?>" > 
      <input type="text" hidden="" value="<?php echo $show1['p_answ'];?>" name="right_ans" id="<?php echo $right_ans; ?>" >  
  </div><span id="<?php echo $idsee;?>"></span> </div>
     
<?php if($countt==1){
?>
  
 <?php  } 
?>
 <?php $countt++;  }
?>
  
<div style="overflow:auto;background: lightgrey;" >
    <div style="float:right;" > 
      <button type="button" id="prevBtn" class="btn btn-info btn-xs" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" name="next" class="btn btn-info btn-xs " onclick="nextPrev(1);">Next<i class="fa fa-hand-right"></i></button>
    </div>
   
  </div>
<span class="text-muted"><center><p><small>Please Only the first choosen Assertion will be considered! Be carefull!</small></p></center></span>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:0px;">
    <?php 
    $selb=mysqli_query($connect,"SELECT * FROM questions where exam_id = ".(int)$course_id." and  test_id = ".(int)$test_id."  ");
     while($show=mysqli_fetch_array($selb))
                          {
                          ?>
    <span class="step text-info"></span>
    <?php }
?>

  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else if (n >= (x.length-1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n);
  insert_passed_exam();
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }

  // Otherwise, display the correct tab:
  showTab(currentTab);

}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("select");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}


</script>



     
        
    </div>
</div>
</div>
<!--MODALS -->
	<!--modal to add new user-->
      <!-- aDD User-->
   
</body>