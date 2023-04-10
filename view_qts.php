<?php session_start();  $id=$_SESSION['nn'];  include('config_database.php');
              $take=mysqli_query($connect,"SELECT * FROM user WHERE user_id='$id'");
              $view=mysqli_fetch_array($take);
              $id=$view['user_id'];
            $exam_id=$_POST['data'];
              ?>
<br><div class="container " style="background: lightgrey;">
	       <div>

<?php 
    $kk=mysqli_query($connect,"SELECT * FROM questions inner join exam on exam.exam_id=questions.exam_id  where exam.exam_id='$exam_id'");
    $sskk=mysqli_fetch_array($kk);
  ?>
      <h3>Question </h3>
      <h4>Subject : <B ><?php echo $sskk['exam_subject'];?>.</B></h4>
      <p>
        <?php echo $sskk['question'];?>
        <form method="post" action="">
          <div class="row" style="border: 1px solid lightgrey;">
    
                <label class="col-md-2">Assertions </label>

                <label class="col-md-1"><B>1) <?php echo $sskk['as1'];?></B> </label>
                <input type="radio" name="as"  value="<?php echo $sskk['as1'];?>" required=""  class="col-md-1 form-control">
                <label class="col-md-1"><B>2) <?php echo $sskk['as2'];?></B> </label>
                <input type="radio" name="as"  value="<?php echo $sskk['as2'];?>" required=""  class="col-md-1 form-control">
                <label class="col-md-2"><B>3) <?php echo $sskk['as3'];?></B> </label>
                <input type="radio" name="as" value="<?php echo $sskk['as3'];?>"  required=""  class="col-md-1 form-control">
              <label class="col-md-2"><B>4) <?php echo $sskk['as4'];?></B> </label>
                <input type="radio" name="as"  value="<?php echo $sskk['as4'];?>" required=""  class="col-md-1 form-control">

                <input type="text" name="exam_id" hidden="" value="<?php echo $exam_id;?>">
    </div><br>
      <center ><em class="text-muted"><small>Make sure you have full up all the necessary steps</small></em><br>
      <input type="submit" name="submit_exam" value="Submit the Exam" class="btn btn-xs" style="background: teal;color: white;"></center>
        </form>
      </p>

    </div>
		<br><br><br><br>
	</div>
