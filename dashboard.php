<?php
    require_once('../includes/header3.php');
    require_once('../includes/connection.php');




        $sqll = "SELECT * FROM job WHERE lancerid = '$userid'";
        $resultt = mysqli_query($connect, $sqll);
        $rows = mysqli_fetch_assoc($resultt);
        $jobid = $rows['id'];
        $lancerid = $rows['lancerid'];
        $name = $rows['name'];
        $project = $rows['project'];
        $locations = $rows['locations'];
        $startdate = $rows['startdate'];
        $amount = $rows['amount'];
        $jobstart = $rows['jobstart'];
        $job_stat = $rows['job_stat'];




    // $user_id = base64_decode($_GET['id']);
    // $sql = "SELECT * FROM job WHERE lancerid = '$id'";
    // $res = mysqli_query($connect, $sql);
    // $row = mysqli_fetch_assoc($res);
    // $status = $row['jobstart'];
    // $amount = $row['amount'];
    // $newstat = count($status);
    
    
    
    

?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Earnings (Monthly)</div>
                                            

                                                  <?php if (empty($total)) { ?>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo 0; ?></div>
                                            <?php }else{ ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $total; ?></div>
                                        <?php } ?>
                                            
                                        
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Earnings (Annual)</div>
                                             <?php if (empty($total)) { ?>

                                                <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo 0; ?></div>
                                            <?php }else{ ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">$<?php echo $total; ?></div>
                                        <?php } ?>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks
                                            </div>
                                            <div class="row no-gutters align-items-center">

                                        <?php
                                            $sql5 = "SELECT SUM(job_stat) AS job_statt FROM job WHERE jobstart = 0 AND lancerid = '$userid'";
                                            $results = mysqli_query($connect, $sql5);
                                            $rowww = mysqli_fetch_assoc($results);

                                            $job_stat = $rowww['job_statt']; 

                                            if (empty($job_stat)) {
                                                $job_stat = 0;
                                            }

                                        ?>
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?=$job_stat?>%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: <?=$job_stat?>%" aria-valuenow="<?$job_stat?>" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests  -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pending jobs</div>
                                            <?php 
                                            $sql2 = "SELECT COUNT(*) AS usercount FROM job WHERE jobstart = 0 AND lancerid = '$lancerid'";
                                            $res = mysqli_query($connect, $sql2);
                                            $row = mysqli_fetch_array($res);
                                            $usercount = $row['usercount']; 

                                            ?>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $usercount; ?></div>
                                       
                                     
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                       
                        <div class="col-xl-12 col-lg-12">
                           
                        </div>

                        
                        
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-12">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-color">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Task Volume<span
                                            class="float-right"><?=$job_stat?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$job_stat?>px;"
                                            aria-valuenow="<?=$job_stat?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                              
                                </div>
                            </div>

                           

                        

                            

                            <!-- Approach -->
                            <div class="card shadow mb-6">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-color">Testimonial Ratings</h6>
                                </div>
                                <div class="card-body">
                                    <h6>John Obi</h6>
                                    <p>"<?php echo $first." ".$last; ?> is one of the best Freelancers you can find in the industry. He offers 
                                        so far, one of the best Freelancing services you can find on the Internet".</p>

                                    <h6>Paul Indi</h6>
                                    <p class="mb-0">"<?php echo $first." ".$last; ?> is tested and trusted. He is my number 1 UI & UX designer. 
                                        He undertands the need to deliver, and he delivers on time".
                                    </p>
                                </div>
                            </div>

                        </div>

                       
                    </div>

                </div>
                

            </div>
            

            <!-- Footer -->
           
          <div class="foot">

            <div class="container-fluid row d-flex justify-content-around">
              <div class="col-md-5 row d-flex">
                <h1 class="footlogo" >LTYAGE</h1>
                <span class="footspan ">&copy; LytAge Technologies Ltd 2021</span>
              </div>

              <div class="col-md-4 col-sm-12 d-flex ">
                <div class="footicon">
                  <a class="footlink" href=""><i class="fa fa-facebook"></i></a>
                  <a class="footlink"  href=""><i class="fa fa-twitter"></i></a>
                  <a class="footlink"  href=""><i class="fa fa-instagram"></i></a>
                  <a class="footlink"  href=""><i class="fa fa-linkedin"></i></a>
                </div>

                <div class="footicon2">
                  <a class="footlink footicon2"  href=""><i class="fa fa-dollar"> USD</i></a>
                </div>
              </div>


            </div>
           

        </div>
       
    </div>
   

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../includes/logoutlance.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>   
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/js/chart-area-demo.php"></script>
    <script src="js/js/chart-pie-demo.js"></script>

</body>

</html>