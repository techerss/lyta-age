<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/boot4/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/boot4/css/bootstrap.css">
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">

    <link rel="stylesheet" href="../assets/boot5/dist/css/bootstrap.css">


</head>

<body id="regbg" style="background-color: rgb(29, 172, 197);">
    <div style="position: absolute; top: 50px;"><a style="color: white; text-decoration: none;" href="index.php"><i class="fa fa-home fa-3x" style=""></i>Home</a></div>

    <div class="container" id="regbg">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!--Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
                                    </div>
                                    <form class="user" method="POST" action="../includes/freelancelog.php">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
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
                                        <button href="index.php" name="submit" class="btn btn-primary btn-user btn-block"> 
                                            Login
                                        </button>
                                        <hr>
                                        <a href="index.php" class="btn btn-danger btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.php" class="btn btn-primary btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a>
                                     
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#mymodal" class=" small" >Forgot Password?</button>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="mymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                  
                   <h1 class="moda-title" id="exampleModalLabel">Forgot password</h1>
                   <button data-toggle="modal" data-target="#mymodal" class="btn-close" data-bs-dismiss="modal" aria-label="Close">&times;</button>

               </div>

               <div class="modal-body">
                  <form action="../includes/reset.php" method="POST">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email2" class="form-control">
                        </div>
                        <div class="form-group">
                             <button class="btn btn-success" name="reset">Reset</button>
    
                        </div>
 
                  </form>

               </div>
               <div class="modal-footer">
                   <button class="btn btn-info close" data-dismiss="modal">close</button>

               </div>

           </div>

       </div>

   </div>

    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
    </div> -->


 

    <script src="../assets/jquery3.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script type="text/javascript">
        
        $(function(){

            $("#error").fadeOut(7000);

        });
    </script>

</body>

</html>