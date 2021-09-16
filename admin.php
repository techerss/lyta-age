<?php

    require_once('../includes/header4.php');

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">All Users</h1>
                        
                    </div>

                    <div class="container">
        
            <div class="table-responsive">
                <table class=" table  table-striped">
                    
                    <tr class="table-head">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Location</th>
                        <th>Status</th>
                    </tr>

                
                    <?php
                        $sql = "SELECT * FROM lancer";
                        $result = mysqli_query($connect, $sql);
                        while ($rows = mysqli_fetch_assoc($result)) {
                            $id = $rows['id'];
                            $first = $rows['first'];
                            $last = $rows['last'];
                            $email = $rows['email'];
                            $location = $rows['location'];
                            $status = $rows['status1'];
                    ?>  
                        <tr>
                            <td><?php echo $first;?></td>
                            <td><?php echo $last;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $location;?></td>
                            <td>
                                <?php if($status == 1){?>
                                    <p>Active User</p>
                                <?php }else{?>
                                    <p>Deleted User</p>
                                <?php } ?>
                            </td>
                        </tr>


                    <?php } ?>

                    
                </table>
                
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
                    <a class="btn btn-primary" href="../includes/logoutadmin.php">Logout</a>
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
    <script src="js/js/chart-area-demo.js"></script>
    <script src="js/js/chart-pie-demo.js"></script>

</body>

</html>