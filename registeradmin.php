

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Registration</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/boot4/css/font-awesome/css/font-awesome.css">

</head>

<body style="background-color: rgb(29, 172, 197);">
    

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register Admin</h1>
                            </div>
                            <form action="../includes/adminsub.php" method="POST" class="user">
                                <div class="form-group ">
                                    
                                        <input type="text" name="fullname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Full Name">
                                  
                                    
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    
                                        <input type="password" name="password" class="form-control form-control-user "
                                            id="exampleInputPassword" placeholder="Password">
                                   
                                    
                                </div>

                               

                                 

                               
                                <button class="btn btn-primary btn-user btn-block" name="submit">
                                    Register Account
                                </button>

                                 
                                    
                                
                                <hr>
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
                                
                               
                            </form>

                            
                            <div class="text-center">
                                <a class="small" href="loginadmin.php">Already an Admin? Login!</a>
                            </div>
                        </div>
                    </div>
                
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>