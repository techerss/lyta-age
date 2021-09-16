<?php

require_once('../includes/header1.php');
require_once('../includes/connection.php');

if (isset($_GET['id'])) {
	$post_id = base64_decode($_GET['id']);
	$sql = "SELECT * FROM post WHERE post_id = '$post_id' AND post_status > 0";
	$result = mysqli_query($connect, $sql);
	$row = mysqli_fetch_assoc($result);
	$post_image = $row['post_image'];
	$caption = $row['caption'];
	$content = $row['content'];
	$post_status = $row['post_status'];
	

}

?>

    <!-- jumbotron section -->

          <div class="jumbotron hirejum" id="">

            <div class="container " id="cap">

                <h1 class="jumtext">Our Blog Posts</h1>

                <form class="form-inline d-flex justify-content-center" action="">

                    <div  id="btn">
                      <a  class="btn btn-success" href="register.php" >
                        Get Started
                    </a>
                        <button class="btn btn-info">Watch Demo <i class="fa fa-play"></i> </button>

                    </div>

                </form>
            </div>
        </div>
        		
              
            <div class="container">

            	<section>
            		<div class="container ">

              

		              <img src="../includes/image/<?=$post_image?>" class="img-fluid pubimg" alt="" srcset="">

		              <h2 class="text-left" id="hblack"><?=$caption?></h2>
		              
		              	

		            </div>

            	</section>

            	<section class="container">
            		<div class="pub2  ">

              

			              <p class="text-justify"><?=$content?></p>


            			</div> 
            	</section>

            	
            </div>




         <?php
          require_once('../includes/footer.php');
         ?>

    







   <script src="../assets/jquery ne/jquerynew.js"></script>
    <script src="../assets/boot4/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/jquery-3.2.1.min.js"></script>
</body>
</html>