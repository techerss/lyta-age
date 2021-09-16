<?php
    require_once('../includes/header3.php');

    require_once('../includes/connection.php')
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">

                        <h1 class="h3 mb-2 text-gray-800">Project Evaluation</h1>

                        <!-- Content Column -->
                        <div class="col-md-12 mb-4">
                        <?php
                            $sql5 = "SELECT SUM(job_stat) AS job_statt FROM job WHERE jobstart = 0 AND lancerid = '$userid'";
                            $results = mysqli_query($connect, $sql5);
                            $rowww = mysqli_fetch_assoc($results);

                            $job_stat = $rowww['job_statt']; 
                              if (empty($job_stat)) {
                                 $job_stat = 0;
                            }

                        ?>
                                            

                            <!-- Project Card  -->
                            <div class="card shadow mb-4">
                                
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-color">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Task volume<span
                                            class="float-right"><?=$job_stat?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?=$job_stat?>px;"
                                            aria-valuenow="<?=$job_stat?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    
                                </div>
                            </div>

                           

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Job Evaluation</h1>
                   

                </div>


                
                    <!-- DataTales Example -->
                    <div class="card shadow  col-md-12">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-color">Job Analysis</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ">
                                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Project</th>
                                            <th>location</th>
                                            
                                            <th>Start date</th>
                                            <th>Amount</th>
                                            <th>Completed</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Project</th>
                                            <th>Location</th>
                                           
                                            <th>Start date</th>
                                            <th>Amount</th>
                                            <th>Completed</th>
                                        </tr>
                                    </tfoot>
                                    <tbody id="rowss">
                                 
                                        <?php

                                            $sql = "SELECT * FROM job WHERE lancerid = '$id' ";
                                            $result = mysqli_query($connect, $sql);
                                            while($rows = mysqli_fetch_assoc($result)) {
                                                $jobid = $rows['id'];
                                                $name = $rows['name'];
                                                $project = $rows['project'];
                                                $locations = $rows['locations'];
                                                $startdate = $rows['startdate'];
                                                $amount = $rows['amount'];
                                                $jobstart = $rows['jobstart'];
                                                $job_stat = $rows['job_stat'];

                                        ?>
                                        <tr>
                                            <td><?php echo $name;?></td>
                                            <td><?php echo $project;?></td>
                                            <td><?php echo $locations;?></td>
                                            
                                            <td><?php echo $startdate;?></td>
                                            <td>$<?php echo $amount;?></td>
                                            <input type="hidden" value="<?=$jobid?>" id="<?php echo $jobid; ?>id" name="">
                                            <input type="hidden" value="<?=$amount?>" id="<?php echo $jobid; ?>amount" name="">
                                            <input type="hidden" name="" value="<?=$job_stat?>" id="<?php echo $jobid; ?>job_stat">
                                            <td><?php if($jobstart == 1){?>
                                                
                                                <button class="btn btn-success" disabled=""> Completed</button>
                                            <?php }else{?>
                                                <button class="btn btn-warning" id="<?php echo $jobid; ?>pending" onclick="return complete('<?php echo $jobid; ?>')" >Pending</button>
                                            <?php } ?>

                                            </td>
                                        </tr>

                                    <?php } ?>

                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

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
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/js/datatables-demo.js"></script>

</body>
<script type="text/javascript">
    function complete(id){
        var id = $('#' + id + 'id').val();
        var amount = $('#' + id + 'amount').val();
        // var job_stat = $('#' + id + 'job_stat').val();

       
        var formData = new FormData();

        formData.append('id', id);
        formData.append('amount', amount);
        // formData.append('job_stat', job_stat);


            //upoading using ajax

        $.ajax({
            url: '../includes/completed.php',
            type: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data: formData,
            success: function(response){
                $('#rowss').load("jobs.php #rowss > *"); 
            }
        });

    }
    </script>
</html>