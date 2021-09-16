<?php

    require_once('../includes/header3.php');

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 " style="margin-bottom: 10px;">
                <div style="width: 400px; height: 600px;" class="card">
                    <div class="cardi container" style="padding: 30px;  ">
                        <div class="card-head d-flex justify-content-center">
                            <div class="cardimgdiv d-flex justify-content-center">
                            <img id="cardimg" src="../includes/profile/<?=$profile?>" style="width: 200px; height: 200px; border-radius: 50%;">
                                
                            </div> 


                           
                            
                        </div>
                         <div style="margin-top: 10px; " class="text-center">
                            <h2 class="head"><?php echo $first.' '.$last; ?></h2>
                            <form enctype="multipart/form-data" action="../includes/profilesub.php" method="POST" class="d-flex justify-content-center">
                               
                                <input  type="file" name="file" id="gallary-photo-add"> <button class="btn btn-primary" name="upload">Upload</button>
                                <hr>
                                </div>
                                 <?php if(isset($_GET['error'])){?>
                                <div id="error" class="alert alert-danger" role="alert">
                                    <?=urldecode($_GET['error'])?>
                                </div>
                                <?php } elseif(isset($_GET['success'])){?>
                                <div id="error" class="alert alert-success" role="alert">
                                    <?=urldecode($_GET['success'])?>
                                </div>
                                <?php }?>
                            </form>


                        <div class="card-body">
                            <div class=" navbar location" name="location">
                                <i class="fa fa-map-marker" aria-hidden="true"> Location</i>
                                <span><?php echo $location;  ?></span>
                                
                            </div>

                             <div class=" navbar location" name="location">
                                <i class="fa fa-user" aria-hidden="true"> Member since</i>
                                <span><?php echo $date; ?></span>
                                
                            </div>
                        
                        
                        </div>
                    </div>
                    
                   
                    
                </div>
            </div>

            <div class="col-md-6" >
            <div style="width: 400px; height: 600px;" class="  card">
                <div class="cardi container" style="padding: 30px;  ">
                    <div class="card-head ">
                            <div id="message" class="d-block" role="alert"></div> 

                         <input type="hidden" name="userid" value="<?=$userid?>" id="userid"> 
                        
                              <div class="d-flex justify-content-start">
                            <div class=" container-fluid " id="postdes" method="POST">
                            <div class="navbar d-flex justify-content-between">
                            <label>Description</label>
                            <button data-action="describe" id="adddes" name="adddes" class="btn" style="color: blue;">Add New</button>
                            </div>

                            
                            <textarea class="form-control" id="des"  type="text" name="des" placeholder=""><?=$discription?></textarea>
                            

                            </div>
                        </div> 
                        <hr>


                              <div class="d-flex justify-content-start">
                            <div class=" container-fluid " id="postskill" method="POST">
                            <div class="navbar d-flex justify-content-between">
                            <label>Skills</label>
                            <button data-action="skills" id="addskill" name="addskill" class="btn" style="color: blue;">Edit skills</button>
                            </div>

                            <input class="form-control" id="skill" value="<?=$skill?>" type="skill" name="skill" placeholder="Add Your Skill">
                           
                            </div>
                        </div> 
                            

                        <hr>

                        <div class="d-flex justify-content-start">
                            <div class=" container-fluid " id="posted" method="POST">
                            <div class="navbar d-flex justify-content-between">
                            <label>Eduction</label>
                            <button data-action="education" id="added" name="added" class="btn" style="color: blue;">Edit New</button>
                            </div>

                            <input class="form-control" id="education" value="<?=$education?>" type="education" name="education" placeholder="Add Your Skill">
                           
                            </div>
                        </div> 
                             

                            

                       
                            
                       
                        <hr>
                             <div class="d-flex justify-content-start">
                            <div class=" container-fluid " id="postcert" method="POST">
                            <div class="navbar d-flex justify-content-between">
                            <label>Certification</label>
                            <button data-action="certification" id="addcert" name="cert" class="btn" style="color: blue;">Edit New</button>
                            </div>

                            <input class="form-control" id="certification" value="<?=$certification?>" type="cert" name="cert">
                           
                            </div>
                        </div> 
                        

                            

                           



                       
                        
                    </div>
                     
                    
                </div>
                
               
            
            </div>
            </div>
        </div>
        
    </div>

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


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>   
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/js/chart-area-demo.js"></script>
    <script src="js/js/chart-pie-demo.js"></script>
     <script>

        $(function(){
            var imagespreview = function(input, placetoinsertimagespreview){
                if(input.files){
                    var filesamount = input.files.length;

                    for(i = 0; i < filesamount; i++){
                        var reader = new FileReader();
                        reader.onload = function(event){
                            $($.parseHTML('<embed width="20%" height="40%" >')).attr('src',
                                 event.target.result).appendTo(placetoinsertimagespreview)
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#gallary-photo-add').on('change', function(){
                imagespreview(this, 'div.gallery')
            });
        });



        $('#adddes').click(function(e){
            var action = $(this).data('action'); 
            var des = $("#des").val();
            var userid = $("#userid").val();
            
            var submitbtn = document.querySelector('button#adddes');
            var message = document.getElementById('message');

                var formData = new FormData();

                formData.append('des', des);
                formData.append('userid', userid);
                formData.append('action', action);
                //upoading using ajax

                $.ajax({
                    url: '../includes/profilesub.php',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response){
                       
                        $('#postdes').load("profile.php #postdes > *");
                        document.getElementById('message').innerHTML = response;
                          
                    }
                });
                 

            

        })




        
        $('#addskill').click(function(e){
            var action = $(this).data('action'); 
            var skill = $("#skill").val();
            var userid = $("#userid").val();
            
            var submitbtn = document.querySelector('button#addskill');
            var message = document.getElementById('message');

         
                var formData = new FormData();

                formData.append('skill', skill);
                formData.append('userid', userid);
                formData.append('action', action);
                //upoading using ajax

                $.ajax({
                    url: '../includes/profilesub.php',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response){
                       
                        $('#postskill').load("profile.php #postskill > *");
                        document.getElementById('message').innerHTML = response;
                          
                    }
                    
                });
                  

            

        })



        $('#added').click(function(e){
            var action = $(this).data('action'); 
            var education= $("#education").val();
            var userid = $("#userid").val();
            
            var submitbtn = document.querySelector('button#added');
            var message = document.getElementById('message');
 

                var formData = new FormData();

                formData.append('education', education);
                formData.append('userid', userid);
                formData.append('action', action);

                //upoading using ajax

                $.ajax({
                    url: '../includes/profilesub.php',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response){
                       
                        $('#posted').load("profile.php #posted > *");
                        document.getElementById('message').innerHTML = response;
                          
                    }
                    
                });
                  

            

        })
     
       $('#addcert').click(function(e){
            var action = $(this).data('action'); 
            var certification= $("#certification").val();
            var userid = $("#userid").val();
            
            var submitbtn = document.querySelector('button#addcert');
            var message = document.getElementById('message');

       

                var formData = new FormData();

                formData.append('certification', certification);
                formData.append('userid', userid);
                formData.append('action', action);
                //upoading using ajax

                $.ajax({
                    url: '../includes/profilesub.php',
                    type: 'POST',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    success: function(response){
                       
                        $('#postcert').load("profile.php #postcert > *");
                        document.getElementById('message').innerHTML = response;
                       
                    }
                    
                });
                  

               setTimeOut(function(){
                $('#message').fadeOut('slow');
                }, 5000);

        })

           

            
            setTimeOut(function(){
            $('#head').fadeOut('slow');
            }, 5000);

            
    
            

       
    

   
    </script>
    



</body>

</html>