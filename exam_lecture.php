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
</script>
<body>

	<div class="container-fluid " style="height: 50px; background: lightgrey"><br>
		<span class="text-right"><?php echo $view['names'];?> | <i style="color:grey;">Exams</i> </span>
	</div>

	<section id="see">
		<?php 
			$chkid=$_SESSION['nn'];
			$chkcat=mysqli_query($connect,"SELECT category_id FROM user WHERE user_id='$chkid'");
			$chkcateg=mysqli_fetch_array($chkcat);
			if($chkcateg['category_id']==2){
				?>
		<div class="col-lg-12 ">
      <form method="post" action="lect_excel.php">
        <a href="add_exams.php" type="button" class="btn btn-info btn-xs col-lg-6"  ><i class="fa  fa-plus"> </i>  Add a new Exam</a>
          <button type="submit" name="export" class="btn btn-info btn-xs col-lg-2" ><i class="fa  fa-print fa-lg"> Export Excel</i></button>
        </form>
		</div>
		<?php
			}
     ?>
		<div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h2 style="font-family: serif;"><small>Exams  </small></h2>
                </div>
                <div class="card-body">
                  <div class="table-responsive ">
                    <table class="table table-striped  table-bordered table-sm">
                      <thead>
                        <tr>
                          <th>#No</th>
                          <th>Date</th>
                          <th>Student</th>
                          <th>Course</th>
                          <th>Type Of Exam</th>
                          <th>Marks</th>             
                        </tr>
                      </thead>
                      <tbody>
                        
                        	<?php 
                        	$count=1;
                          $idk=$view['class_id'];
                        if($chkcateg['category_id']==2){
                    

                        	// select data from the database  user.class_id='$idk'
                        	$sel=mysqli_query($connect,"SELECT *,test.Name as test_name,DATE_FORMAT(exa_p_date,'%d/%m/%Y') AS exa_date FROM exams  inner join course on exams.course_id=course.course_id inner join user on exams.student_id=user.user_id inner join test on test.ID=exams.test_id  where user.class_id='$idk'");
                        	while($show=mysqli_fetch_array($sel))
                        	{

                        	?>


                       <tr>
                          <th scope="row"><?php echo $count;?></th>
                          <td><?php echo $show['exa_date'];?></td>
                          <td><?php echo $show['names'];?></td>
                          <td><?php echo $show['course_name'];?></td>
                          <td><?php echo $show['test_name'];?></td>
                          <td><?php echo $show['marks'];?> %</td>
                         
                          <?php
                  
                     $count++;
			}
    }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
	</section>


 

</body>