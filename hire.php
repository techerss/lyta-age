<?php
  require_once('../includes/header1.php');



?>


          <!-- jumbotron section -->

          <div class="jumbotron hirejum" id="">

            <div class="container " id="cap">
              
                <h1 class="jumtext">Behold The Best <br>Of <br> The Best</h1>

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
          <!-- modal -->
          <!-- <button id="myBtn">Open Modal</button>
          <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p>THIS IS MY MODAL BOX</p>
            </div>

          </div> -->

          <div class="container bg-greys">

            
         
          <!-- talent section -->

          <div class="talent text-center">

            <div class="talentbadge d-flex justify-content-center ">

              <h1>Make Your Choice</h1>

            </div>
            <div class="talentbadge d-flex justify-content-center ">

              <span class="badge bg">Top Talents</span>

            </div>

            <div class="d-flex justify-content-center">

              

              <div class="container talentin row d-flex justify-content-around cardout-last">

                <?php
                if (isset($_SESSION['id'])) {
                  $userid = $_SESSION['id'];
                  
                
                  $sql = "SELECT * FROM lancer WHERE id != '$userid' LIMIT 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
                  
              ?>

                <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>

                <?php } ?>
              <?php } else {

                   $sql = "SELECT * FROM lancer LIMIT 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
               ?>


               <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>
              <?php } ?>
              <?php } ?>
              

                

                


              </div>
            </div>

             
            <div class="d-flex justify-content-center">

              

              <div class="container talentin row d-flex justify-content-around cardout-last">

                <?php
                if (isset($_SESSION['id'])) {
                  $userid = $_SESSION['id'];
                  
                
                  $sql = "SELECT * FROM lancer WHERE id != '$userid' LIMIT 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
                  
              ?>

                <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>

                <?php } ?>
              <?php } else {

                   $sql = "SELECT * FROM lancer LIMIT 3 OFFSET 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
               ?>


               <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>
              <?php } ?>
              <?php } ?>
              

                

                


              </div>
            </div>

             <div class="talentbadge d-flex justify-content-center ">

              <span class="badge bg">Other Programmers</span>

            </div>


            <div class="d-flex justify-content-center">

              

              <div class="container talentin row d-flex justify-content-around cardout-last">

                <?php
                if (isset($_SESSION['id'])) {
                  $userid = $_SESSION['id'];
                  
                
                  $sql = "SELECT * FROM lancer WHERE id != '$userid' LIMIT 3, 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
                  
              ?>

                <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>

                <?php } ?>
              <?php } else {

                   $sql = "SELECT * FROM lancer LIMIT 3 OFFSET 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
               ?>


               <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>
              <?php } ?>
              <?php } ?>
              

                

                


              </div>
            </div>

            <div class="d-flex justify-content-center">

              

              <div class="container talentin row d-flex justify-content-around cardout-last">

                <?php
                if (isset($_SESSION['id'])) {
                  $userid = $_SESSION['id'];
                  
                
                  $sql = "SELECT * FROM lancer WHERE id != '$userid' ORDER BY RAND() LIMIT 3";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
                  
              ?>

                <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>

                <?php } ?>
              <?php } else {

                   $sql = "SELECT * FROM lancer ORDER BY RAND() LIMIT 3 ";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
               ?>


               <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../assets/img/div1a.jpeg" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


                  </div>
                  <hr>

                  <div class="text">
                      <h3><?php echo $first.' '.$last; ?></h3>
                      <p><?php echo $discription; ?></p>


                  </div>

                    <div>
                    <?php if (isset($_SESSION['id'])) {?>
                    <a  class="btn btn-primary cardout-last" href="hireinfo.php?id=<?php echo base64_encode($id); ?>"  id="join">Hire Him</a>  
                  <?php }else { ?>
                    <a  class="btn btn-primary cardout-last" href="register.php"  id="join">Join to Hire</a>  
                  <?php } ?>
                  </div>

                </div>
              <?php } ?>
              <?php } ?>
              

                

                


              </div>
            </div>
          </div>

          

                


         </div>
           

          

          
        
          <!-- sponsorship -->

          <div class="container-fluid">
            <div class="testbadge d-flex justify-content-center ">

              <span class="badge bg">Sponsors</span>
  
              
  
            </div>

            <div class="row d-flex justify-content-around">

              <div class="col-md-3 " ><img class="sponimg" src="../assets/img/pat1.jpeg" alt="" srcset=""></div>

              <div class="col-md-3 "><img class="sponimg"  src="../assets/img/pat2.jpeg" alt="" srcset=""></div>

              <div class="col-md-3"><img class="sponimg"  src="../assets/img/par3.jpeg" alt="" srcset=""></div>

            </div>
          </div>

          <!-- scroll bar -->

          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>

          <hr>

          <!-- footer -->

          <footer class=" " >

            <div class="row container-fluid d-flex justify-content-around footer">

                <div class="col-md-2 footin">
                  <h5  class="foothead">Categories</h5>
                  <nav class="footnav">

                    <ul>
                      <li class="text-left"><a href="">Graphic Design</a> </li>
                      <li class="text-left"><a href="">Digital Marketing</a> </li>
                      <li class="text-left"><a href="">Wtriting & Translation</a></li>
                      <li class="text-left"><a href="">Video & Animation</a></li>
                      <li class="text-left"><a href="">Music & Audio</a></li>
                      <li class="text-left"><a href="">Programming & Tech</a> </li>
                      <li class="text-left"><a href="">Bussiness</a></li>
                      <li class="text-left"><a href="">UI & UX</a></li>
                    </ul>

                  </nav>

                </div>

                <div class="col-md-2 footin">
                  <h5 class="foothead">Support</h5>

                  <nav class="footnav">

                    <ul>
                      <li class="text-left"><a href="">Help & Support</a> </li>
                      <li class="text-left"><a href="">Trust & Safty</a> </li>
                      <li class="text-left"><a href="">Selling on LytAge</a></li>
                      <li class="text-left"><a href="">Buying on LytAge</a></li>
                    
                    </ul>

                  </nav>

                </div>

                <div class="col-md-2 footin">
                  <h5  class="foothead">Community</h5>

                  <nav class="footnav">

                    <ul>
                      <li class="text-left"><a href="">Event</a> </li>
                      <li class="text-left"><a href="">Blog</a> </li>
                      <li class="text-left"><a href="">Forum</a></li>
                      <li class="text-left"><a href="">Community Standards</a></li>
                      <li class="text-left"><a href="">Podcast</a></li>
                      <li class="text-left"><a href="">Affiliate</a> </li>
                      <li class="text-left"><a href="">Invite a Friend</a></li>
                      <li class="text-left"><a href="">Become a Seller</a></li>
                      <li class="text-left"><a href="">LytAge Elevate</a></li>
                    </ul>

                  </nav>

                </div>

                <div class="col-md-2 footin">
                  <h5  class="foothead">More From LtyAge</h5>

                  <nav class="footnav">

                    <ul>
                      <li class="text-left"><a href="">LytAge Pro</a> </li>
                      <li class="text-left"><a href="">LytAge Studios</a> </li>
                      <li class="text-left"><a href="">LytAge Logo Maker</a></li>
                      <li class="text-left"><a href="">LytAge Guide</a></li>
                      <li class="text-left"><a href="">Get Inspired</a></li>
                      <li class="text-left"><a href="">ClearVoice</a> </li>
                      <li class="text-left"><a href="">AND CO</a></li>
                      <li class="text-left"><a href="">Learn</a></li>
                    </ul>

                  </nav>

                </div>
            </div>

          </footer>

          <hr>


         
         <?php
          require_once('../includes/footer.php');
         ?>



        </div>

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
                <div class="modal-body">Select "Join us" below if you are ready to Join LytAge.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="dashboard/register.html">Join us</a>
                </div>
            </div>
        </div>
    </div>

        <!-- <img class="socialImg" src="img/97-979298_social-media-icons-twitter-facebook-instagram-vertical-social.png " alt="" srcset=""> -->


          
         

          

          

          

        <!-- <script src="dashboard/vendor/jquery/jquery.min.js"></script>
        <script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="dashboard/js/sb-admin-2.min.js"></script>   -->
    
<!-- mainjs -->
    <script src="../assets/jquery ne/jquerynew.js"></script>
    <script src="../assets/boot4/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/jquery-3.2.1.min.js"></script>
</body>
</html>