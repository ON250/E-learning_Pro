<?php include('include/header.php');?>
  <body>
<SCRIPT LANGUAGE="JavaScript">
function check() {
mt=document.form1.addque.value;
if (mt.length<1) {
alert("Please Enter Question");
document.form1.addque.focus();
return false;
}
a1=document.form1.ans1.value;
if(a1.length<1) {
alert("Please Enter Answer1");
document.form1.ans1.focus();
return false;
}
a2=document.form1.ans2.value;
if(a1.length<1) {
alert("Please Enter Answer2");
document.form1.ans2.focus();
return false;
}
a3=document.form1.ans3.value;
if(a3.length<1) {
alert("Please Enter Answer3");
document.form1.ans3.focus();
return false;
}
a4=document.form1.ans4.value;
if(a4.length<1) {
alert("Please Enter Answer4");
document.form1.ans4.focus();
return false;
}
at=document.form1.anstrue.value;
if(at.length<1) {
alert("Please Enter True Answer");
document.form1.anstrue.focus();
return false;
}
return true;
}
</script>
    <?php

      $pictureMsg='';
      $msg='';


  if(isset($_POST['save']) )

  {

extract($_POST);
mysqli_query($connect,"INSERT INTO `questions`(`exam_id`, `question`, `p_answ`,  `as1`, `as2`, `as3`, `as4`, `test_id`) values ('$examid','$addque','$anstrue','$ans1','$ans2','$ans3','$ans4','$testid')") or die(mysqli_error());
$msg='<div class="container-fluid " style="height: 30px;background: lightgreen;">
  <center><span style="color: teal;"><p align=center>Question Added Successfully.</p></span></center></div>';
unset($_POST);
}



//pour le telechargement de la photo
              //Si  la photo est changee 
            
        
          $id=$_SESSION['nn'];
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
?>
        <div class="container-fluid " style="height: 50px; background: lightgrey"><br>
    <span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Add exam</i> </span>


    <br>
       
  </div>
  <?php echo $msg;?>

      <!-- Header Section-->
      <section class="dashboard-header section-padding row" >
        
          <div class="col-md-9" style="margin-left: 1%;">
         <form name="form1" method="post" onSubmit="return check();">
  <table width="111%"  border="0" align="center">
    <tr>
      <td width="24%" height="32"><div align="left"><strong>Select Test Name </strong></div></td>
      <td width="1%" height="5">  </td>
      <td width="75%" height="32"><select name="testid" id="testid">
<?php
$rs=mysqli_query($connect, "Select * from test order by ID desc ");
    while($row=mysqli_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
    </td> 
     </tr>
     <tr>
      <td width="24%" height="32"><div align="left"><strong>Select Course Name </strong></div></td>
      <td width="1%" height="5">  </td>
      <td width="75%" height="32"><select name="examid" id="examid">
<?php
$rs=mysqli_query($connect, "Select * from course where lecture_id = ".(int)$_SESSION['nn']." order by course_id desc ");
    while($row=mysqli_fetch_array($rs))
{
if($row[0]==$testid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
?>
      </select>
    </td> 
     </tr>  
    <tr>
        <td height="40"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
      <td><textarea name="addque" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input name="ans4" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="save" value="Add" ></td>
    </tr>
  </table>
</form>
          </div>
        <div class="container-fluid">
        </div>
      </section>
      <!--footer -->
      <?php include("include/footer.php");?>
    </div>
    
  </body>
</html>