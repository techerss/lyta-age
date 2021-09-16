<?php
  require_once('../includes/header1.php');


?>

          <!-- jumbotron section -->

          <div class="jumbotron jum" id="">

            <div class="container " id="cap">
              
                <h1 class="jumtext " >Looking to buy or sell a <br><span>SKILL </span><br> LytAge is Here for you</h1>

                <form class="form-inline d-flex justify-content-center" action="">

                    <div  id="btn">
                      <a class="btn btn-success" href="register.php" >
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

            <div class="row">

                <div class="col-md-6 welcome">

                  <h1 class="wel text-center" id="hblack">Welcome to <span>L</span>yt<span>A</span>ge</h1>

                  <p class="welp">LytAge is an ocean of infinite possibilities. It is a market place where skill meets money. 
                    Talents are rewarded, and needs are certisfied. Take a deep dive into this ocean with one click!
                  </p>

                  <div class="d-flex justify-content-center">

                    

                    <a class="btn" id="join" href="register.php" >
                      Join Us
                  </a>
                  </div>

                </div>

                <div class="col-md-6 img">

                    <img src="../assets/img/images (5).jpeg" alt="" class="img-fluid" srcset="">

                </div>

            </div>

          </div>

          <!-- service section -->

          <div class="services text-center ">

            <div class="servbadge d-flex justify-content-center">

              <span class="badge bg">Services</span>

            </div>
           

            <div class="d-flex justify-content-center  cardout">

              <div class="car container row d-flex justify-content-around">

                <div class="card col-md-3 cardin b"  >

                  <div class="card-body">
                    <i class="fa fa-desktop fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Web development</h4>

                  </div>

                </div>

                <div class="card col-md-3 cardin">

                  <div class="card-body">
                    <i class="fa fa-file-text fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Writing</h4>

                  </div>


                </div>

                <div class="card col-md-3 cardin " >

                  <div class="card-body">
                    <i class="fa fa-line-chart fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Sales & Marketing</h4>

                  </div>


                </div>



              </div>
            </div>


            <div class="d-flex justify-content-center cardout">

              <div class="car container row d-flex justify-content-around">

                <div class="card col-md-3 cardin" >

                  <div class="card-body">
                    <i class="fa fa-headphones fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Customer Service</h4>

                  </div>

                </div>

                <div class="card col-md-3 cardin " >

                  <div class="card-body">
                    <i class="fa fa-bar-chart fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Data Science</h4>

                  </div>


                </div>

                <div class="card col-md-3 cardin " >

                  <div class="card-body">
                    <i class="fa fa-lightbulb-o fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Design & Creative</h4>

                  </div>


                </div>



              </div>
            </div>


            <div class="d-flex justify-content-center cardout ">

              <div class="car container row d-flex justify-content-around">

                <div class="card col-md-3 cardin  cardout-last" >

                  <div class="card-body">
                    <i class="fa fa-microphone fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Voice Over Artist</h4>

                  </div>

                </div>

                <div class="card col-md-3 cardin cardout-last" >

                  <div class="card-body">
                    <i class="fa fa-podcast fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>Show Host</h4>

                  </div>


                </div>

                <div class="card col-md-3 cardin  cardout-last">

                  <div class="card-body">
                    <i class="fa fa-sitemap fa-5x"></i>

                  </div>

                  <div class="card-footer">

                    <h4>UI & UX Designers</h4>

                  </div>


                </div>



              </div>
            </div>

          

            


          </div>

          <!-- talent section -->
        

          <div class="talent text-center">

            <div class="talentbadge d-flex justify-content-center ">

              <span class="badge bg">Talents</span>

            </div>

            <div class="d-flex justify-content-center">

              <div class="container talentin row d-flex justify-content-around cardout-last">
             <?php
              if (isset($_SESSION['id'])) {
                $userid = $_SESSION['id'];
               
                  $sql = "SELECT * FROM lancer WHERE id != '$userid' LIMIT 3 ";
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
                $sql = "SELECT * FROM lancer LIMIT 3 ";
                  $result = mysqli_query($connect, $sql);
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $id = $rows['id'];
                    $first = $rows['first'];
                    $last = $rows['last'];
                    $discription = $rows['discription'];
                    $profile = $rows['profile'];


                ?>
                <div class="col-md-3 tal cardout-last">

                  <div class="img">

                    <img src="../includes/profile/<?=$profile?>" class="image-fluid rounded-circle"  alt="" srcset="" style="width: 200px; height: 200px;">


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

          <!-- how it works -->

          <div class="work text-center">

            <div class="talentbadge d-flex justify-content-center ">

              <span class="badge bg">Cash Flow Chain</span>

            </div>

            

            <div id="myCarousel" class="carousel slide" data-ride="carousel"></div>

                            
              
                 
          <!-- new carusel -->

          <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
          
            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../assets/img/job.jpg" style="width: 80%; height: 60%; opacity: 0.5;" alt="" srcset="">
                <div class="carousel-caption text-left">
                <h1 >1. Post a job</h1>
                <i class="fa fa-file-text-o fa-4x"></i>
                <p class="cartext" >Tell us about your project, LytAge connects you to people from around the world, or near you.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="../assets/img/money45.jpg" style="width: 80%; height: 60%; opacity: 0.5;" alt="" srcset="">
                <div class="carousel-caption text-left">
                <h1>2. Get a bid</h1>
                <i class="fa fa-money fa-4x"></i>
                <p class="cartext">Once you have put out your request for a client or a job opportunity, LytAge provides a
                  system where fair deals can be made for everyone. </p>
                </div>
                
              </div>
              <div class="carousel-item" >
                 <img src="../assets/img/card.jpg" style="width: 80%; height: 60%; opacity: 0.5;" alt="" srcset="">
                <div class="carousel-caption text-left">
                <h1>3. Payment made easy</h1>
                <i class="fa fa-credit-card-alt fa-4x"></i>
                <p class="cartext">After a fair deal has been made by both parties, LytAge presents you with unlimited payment 
                  patforms, which would make your transaction smoot and easy.
                </p>
                </div>
              </div>
            </div>
          
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          
          </div>
              
            

        </div> 

        <!-- testimonial -->

        <div class="testimonials text-center">

          <div class="testbadge d-flex justify-content-center ">

            <span class="badge bg">testimonlials</span>

            

          </div>

          

          <div class="testout d-flex justify-content-center">

            <div class="row container d-flex justify-content-around ">
              <?php 

              // $sqlt = "SELECT * FROM testimonial  LIMIT 3";
              $sqlt = "SELECT testimonial.name, testimonial.content, lancer.profile FROM testimonial, lancer WHERE testimonial.user_id = lancer.id";
              $resultt = mysqli_query($connect, $sqlt);
              while ($rowt = mysqli_fetch_assoc($resultt)){;
                $name = $rowt['name'];
                $content = $rowt['content'];
                $profile = $rowt['profile'];
              ?>

              <div class="testin col-md-3">

                <i class="fa fa-quote-left fa-3x" style="color: rgb(29, 172, 197);; margin-top: 20px;"></i>
                <p class="testtext"><?=$content?></p>

                <div class="testimg d-flex">

                  <div class="imgtest d-flex">

                    <img class="rounded-circle" src="../includes/profile/<?=$profile?>" alt="" style="width:  50px; height: 50px;">

                    <h5 style="margin-top: 5%; margin-left: 5px;"><?=$name?></h5>
                  </div>

                </div>

              </div>

            <?php } ?>

              
            </div>

          </div>

        </div>


        <!-- publication -->

        <div class="pub text-center">

          

          <div class="pubin">
            <div class="testbadge d-flex justify-content-center ">

              <span class="badge bg">Publication</span>

              <?php
                $sql = "SELECT * FROM post WHERE post_status = 1 LIMIT 1 OFFSET 3";
                $result = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_assoc($result)) {
                  $post_id = $rows['post_id'];
                  $post_image = $rows['post_image'];
                  $caption = $rows['caption'];
                  $content = substr($rows['content'], 0, 500) ;

                
                  
                
               ?>
  
              
  
            </div>
  
            

            <div class="container ">

              

              <img src="../includes/image/<?=$post_image?>" class="img-fluid pubimg" alt="" srcset="">

              <h2 class="text-left" id="hblack"><?=$caption?>  </h2>

            </div>

            <div class="pub2 container  text-center">

              

              <p class="text-justify"><?php echo $content;       ?><a href="readpost.php?id=<?=base64_encode($post_id);?>"> Read more</a></p>


            </div> 

          <?php } ?>
          

            <div class="row container-fluid d-flex justify-content-around">
               <?php
                $sql2 = "SELECT * FROM post WHERE post_status = 1 LIMIT 3";
                $result2 = mysqli_query($connect, $sql2);
                while ($rowss = mysqli_fetch_assoc($result2)) {
                  $post_id = $rowss['post_id'];
                  $post_image = $rowss['post_image'];
                  $caption = $rowss['caption'];
                  $content = substr($rowss['content'], 0, 200);

                
                  
                
               ?>

              <div  class="col-md-3 ">
  
                <img src="../includes/image/<?=$post_image?>" class="image-fluid subimg" alt="" srcset="">
                <h4 class="text-left" id="hblack"><?=$caption?></h4>

                <p class="text-justify" ><?=$content?><a href="readpost.php?id=<?=base64_encode($post_id);?>"> Read more</a></p>
  
              </div>

            <?php } ?>
  
              
  
            </div>

          </div>

          <!-- sponsorship -->

          <div class="container-fluid">
            <div class="testbadge d-flex justify-content-center ">

              <span class="badge bg">Sponsors</span>
  
              
  
            </div>

            <div class="row d-flex justify-content-around text-center">

              <div class="col-md-3 col-sm-12" ><img class="sponimg" src="../assets/img/pat1.jpeg" alt="" srcset=""></div>

              <div class="col-md-3 "><img class="sponimg"  src="../assets/img/pat2.jpeg" alt="" srcset=""></div>

              <div class="col-md-3"><img class="sponimg"  src="../assets/img/par3.jpeg" alt="" srcset=""></div>

            </div>
          </div>

         

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
                    <a class="btn btn-primary" href="dashboard/register.php">Join us</a>
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