<?php

    require_once('../includes/header4.php');

?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="container " style="margin-bottom: 10rem;">
                    <?php

                    $sql = "SELECT * FROM post WHERE post_status = 1";
                    $result = mysqli_query($connect, $sql);
                    while ($row = mysqli_fetch_assoc($result)){

                    $post_id = $row['post_id'];
                    $post_image = $row['post_image'];
                    $caption = $row['caption'];
                    $content = substr($row['content'], 0, 100);

                    ?>
                    
                        
                        <section class="card  p-3 mb-3">
                            
                            <h5 style="color: black;"><?=$caption?></h5>

                            <div>

                            <p><?=$content?>....</p>

                            <a href="view.php?id=<?php echo base64_encode($post_id)?>" class="btn btn-primary">Edit</a>
                            <a href="../includes/deletepost.php?id=<?php echo base64_encode($post_id)?>"  class="btn btn-primary">Delete</a>
                            </div>       
                           
                        </section>
                       
                <?php } ?>

                        
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
    <script src="js/js/chart-area-demo.js"></script>
    <script src="js/js/chart-pie-demo.js"></script>
    

</body>

</html>