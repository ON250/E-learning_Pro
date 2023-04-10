<?php include('include/header.php');?>
  <body>
    
      <!-- Counts Section -->
      
      <!-- Header Section-->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <br>
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-left: 2%;">
                <div class="tile-stats bg-info" style="padding-left: 2%;padding-top: 5%;padding-bottom: 20%;" style="color: white;">
                  <div class="row" >
                  <B><i class="fa fa-group col-md-3" style="color: black;"></i></B>
                  <h3 class="col-md-9" style="color: black;">New Students</h3> </div>
                  <div class="count " style="color: white;"><center><B>179</B></center></div>
                  <p style="color: black;">Academic Year 2018 - 2019<br>
                  During the registration period From 03 September, 2018</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" style="">
                <div class="tile-stats bg-success" style="padding-left: 2%;padding-top: 5%;padding-bottom: 20%;" style="color: white;">
                  <div class="row" >
                  <B><i class="fa fa-group col-md-3" style="color: black;"></i></B>
                  <h3 class="col-md-9" style="color: black;">Total Faculty</h3> </div>
                  <div class="count" style="color: white;"><center><B>4</B></center></div>
                  <p style="color: black;">Academic Year 2018 - 2019<br>
                  During the registration period From 03 September, 2018</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" style="">
                <div class="tile-stats bg-warning" style="padding-left: 2%;padding-top: 5%;padding-bottom: 20%;" style="color: white;">
                  <div class="row" >
                  <B><i class="fa fa-group col-md-3" style="color: black;"></i></B>
                  <h3 class="col-md-9" style="color: black;">Toatal Department</h3> </div>
                  <div class="count " style="color: white;"><center><B>12</B></center></div>
                  <p style="color: black;">Academic Year 2018 - 2019 <br>
                  During the registration period From 03 September, 2018</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" style="padding-right: 2%;">
                <div class="tile-stats bg-danger" style="padding-left: 2%;padding-top: 5%;padding-bottom: 20%;" style="color: white;">
                  <div class="row" >
                  <B><i class="fa fa-group col-md-3" style="color: black;"></i></B>
                  <h3 class="col-md-9" style="color: black;">Total Class</h3> </div>
                  <div class="count " style="color: white;"><center><B>43</B></center></div>
                  <p style="color: black;">Academic Year 2018 - 2019 <br>
                  During the registration period From 03 September, 2018</p>
                </div>
              </div>
            </div>
<br>
            

             <div class="row">
            <div class="col-lg-6">
              <div class="card line-chart-example bg-dark">
                <div class="card-header d-flex align-items-center">
                  <h4>Ulk Statistics Management</h4>
                </div>
                <div class="card-body">
                  <canvas id="lineChartExample"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card bar-chart-example bg-dark">
                <div class="card-header d-flex align-items-center">
                  <h4>Ulk Statistics Management</h4>
                </div>
                <div class="card-body">
                  <canvas id="barChartExample"></canvas>
                </div>
              </div>
            </div>
            
 </div>
</div>
</div>
     

    <div >
      <?php include("include/footer.php");?>
    </div>
    
     <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>   
      
  </body>
</html>