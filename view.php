<?php

    require_once('../includes/header4.php');
    require_once('../includes/connection.php');

    if (isset($_GET['id'])) {
    $post_id = base64_decode($_GET['id']);

    $sql = "SELECT * FROM post WHERE post_id = '$post_id' AND post_status > 0";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $post_id = $row['post_id'];

    $caption = $row['caption'];
    $content = $row['content'];
    $post_status = $row['post_status'];
        
    }



?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                   
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Article</h1>
                        
                    </div>

                    <div class="container" style="margin-bottom: 200px;">

                    	<form class="form" enctype="multipart/form-data" action="../includes/updatepost.php" method="POST">

				            <div class="form-group">
				            <label for="">Post Caption</label>
				            <input value="<?=$caption?>" type="text" name="caption"  class="form-control">
				            </div>
				            <div id="name_error" class="val_error"></div>
				            
				            
				        
				    
				            <div class="form-group">
				                <label class="d-block" for=""><picture>choose picture</picture></label>
				                <input class="" type="file" name="file" id="gallary-photo-add" >
				                <div class="gallery"></div>
				            </div>

				            <div id="pic-error" class="val_error"></div>

				             <div class="form-group">
				                <label for="">Post Content</label>
				                <textarea class="form-control" name="content" style="height: 400px;"><?=$content?></textarea>
				            </div>
                            <input type="hidden" value="<?=$post_id?>" name="post_id">

				            <div class="form-group">

				                <button name="submit" class="btn btn-primary">Update</button>

				            </div>


				                               
                    		
                    	</form>
                    	<div class="form-group">
                                        <?php if(isset($_GET['error'])){?>
                                        <div id="error" class="alert alert-danger" role="alert">
                                            <?=urldecode($_GET['error'])?>
                                        </div>
                                        <?php } elseif(isset($_GET['success'])){?>
                                        <div id="error" class="alert alert-success" role="alert">
                                            <?=urldecode($_GET['success'])?>
                                        </div>
                                        <?php }?>
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
    <script type="text/javascript">
        
        $(function(){

            $("#error").fadeOut(5000);

        });
    </script>
    

</body>

</html>