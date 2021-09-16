<?php
    require_once('../includes/header3.php');
    require_once('../includes/connection.php');

?>

    <div class="container-fluid">
        <div class="container d-flex align-items-center justify-content-center ">

            <div class="card" style="width: 400px; height: 400px; margin-bottom: 200px; box-shadow: 0px 10px 10px;">
                <form method="POST" action="../includes/testimonylog.php" class="" style="padding: 20px;">

                    <h4 class="text-center">What can you about us</h4>

                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name" value="<?=$first.' '.$last?>">
                        <input type="hidden" name="userid" value="<?=$userid?>">
                        
                    </div>
                    <div class="form-group">
                        <label>Testimonial</label>
                        <textarea class="form-control" name="test"></textarea>
                        
                    </div>

                     <?php if(isset($_GET['error'])){?>
                    <div class="alert alert-danger" role="alert">
                        <?=urldecode($_GET['error'])?>
                    </div>
                    <?php } elseif(isset($_GET['success'])){?>
                    <div class="alert alert-success" role="alert">
                        <?=urldecode($_GET['success'])?>
                    </div>
                    <?php }?>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>




                    
                </form>
                
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
    <script src="js/js/chart-area-demo.js"></script>
    <script src="js/js/chart-pie-demo.js"></script>

</body>

</html>