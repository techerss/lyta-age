
<?php
	
	require_once('../includes/connection.php');
	
    if(isset($_GET['id'])){


    $user_id = base64_decode($_GET['id']);
    $sql = "SELECT * FROM lancer WHERE id = '$user_id'";
    $res = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($res);
    $userfirst = $row['first'];
    $userlast = $row['last'];
    $discription = $row['discription'];
    $skills = $row['skills'];
    $certification = $row['certification'];
    $education = $row['education'];
    
    }
    
   


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/boot4/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/boot4/css/font-awesome/css/font-awesome.css">
    <!-- <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>

<body  class="container-fluid d-flex align-items-center justify-content-center" style="background-color: rgb(29, 172, 197);">



			<div class="row d-flex justify-content-center">
	
	
		

			
				
				<div style="margin-bottom: 10px; width: 400px; height: 600px;" class="card col-md-6" style="">
					<div class="" style="">
	                    <div class="cardi container" style="padding: 30px;  ">
	                    	
	                        <div class="card-head d-flex justify-content-center">
	                            <div class="cardimgdiv d-flex justify-content-center">
	                            <img id="cardimg" class=" " src="../assets/img/hire.jpeg" style="width: 100px; height: 100px; border-radius: 50%;">
	                                
	                        	</div> 


	                           
	                            
	                        </div>
	                         <div style="margin-top: 10px; " class="text-center">
	                            <h4><?php echo $userfirst." ".$userlast; ?></h4>
	                          </div>
	                            
	                            <hr>


	                        <div class="card-body">
	                        	<h5>About Me:</h5>
	                        	<p><?php echo $discription; ?></p>
	                        	<hr>
	                        	<h5>Skills:</h5>
	                        	<p><?php echo $skills; ?></p>
	                        	<hr>
	                        	<?php if (empty($certification)) { ?>
	                        		
	                        	<?php } else { ?>
	                        	<h5>Certification</h5>

	                        	<ul>
	                        		<li><?php echo $certification; ?></li>
	                        	</ul>

	                        	<?php } ?>

	                        	
	                        	<?php if (empty($education) ) { ?>
	                        		
	                        	<?php } else if (empty($certification)) { ?>
	                        	
	                        		
	                        	<h5>Education</h5>

	                        	<ul>
	                        		<li><?php echo $education; ?></li>
	                        	</ul>

	                        	<?php } else { ?>
	                        		<hr>
	                        	<h5>Education</h5>

	                        	<ul>
	                        		<li><?php echo $education; ?></li>
	                        	</ul>

	                        <?php } ?>

	                            

	                            
	                        
	                        
	                        </div>
	                    </div>
                    </div>



                   
	                 
                </div>



                <div style=" width: 400px; height: 600px;" class="card col-md-6">
					
	                    <div class="cardi container" style="padding: 30px;  ">
	                    	
	                        <div class="card-head d-flex justify-content-center">
	                           
	                            
	                            	

	                            



	                            


	                        <div class="card-body">
	                        	<h3 class=" card-title text-center">How Can I Help You</h3>

	                        	<form class="" method="POST" action="../includes/hirelog.php">

	                        		<input type="hidden" value="<?=$user_id?>" name="id">
	                        		<div class="form-group">

	                        		<label class="form-label">Name</label>
	                        		<input class="form-control" type="text" name="name" placeholder="Enter Your Name">
	                        		</div>

	                        		<div class="form-group">

	                        		<label class="form-label">Project</label>
	                        		<input class="form-control" type="text" name="project" placeholder="Enter Your Project">
	                        		</div>

	                        		<div class="form-group">

	                        		<label class="form-label">Location</label>
	                        		<input class="form-control" type="text" name="location" placeholder="Enter Your Location">
	                        		</div>

	                        		<div class="form-group">

	                        		<label class="form-label">Amount</label>
	                        		<input class="form-control" type="text" name="amount" placeholder="Enter Amount">
	                        		</div>
	                        		 <div class="form-group">
                                        <?php if(isset($_GET['error'])){?>
                                        <div class="alert alert-danger" role="alert">
                                            <?=urldecode($_GET['error'])?>
                                        </div>
                                        <?php } elseif(isset($_GET['success'])){?>
                                        <div class="alert alert-success" role="alert">
                                            <?=urldecode($_GET['success'])?>
                                        </div>
                                        <?php }?>


                                         </div>
	                        		<hr>
	                        		<button name="submit" class="btn btn-primary">Submit</button>

	                        		
	                        	</form>
	                            
	                        
	                        
	                        </div>
	                    </div>
                    </div>



                   
	                 
                
             </div>
                    
                   
                    
                    
                   
                    
               
  
        
					
			

			
			

		






 	<script src="../assets/jquery ne/jquerynew.js"></script>
    <script src="../assets/boot4/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/bootstrap.js"></script>
    <script src="../assets/boot4/js/js/jquery-3.2.1.min.js"></script>

</body>
</html>