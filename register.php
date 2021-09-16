

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

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
     <div id="home" style="position: absolute; top: 50px;"><a style="color: white; text-decoration: none;" href="index.php"><i class="fa fa-home fa-3x" style=""></i>Home</a></div>

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="../includes/registerlance.php" method="POST" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user "
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="location" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Country">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="discription" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Discription">
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        
                                            <select style="border-radius: 30px; height: 50px;" name="profession" class="form-control  "
                                            id="exampleInputPassword" placeholder="Profession">
                                                <option style="font-weight: bolder; background-color: grey; color: white;">Profession</option>
                                              
                                                <option>Graphics & Design</option>
                                                <option>Digital Marketing</option>
                                                <option>Writing & Translation</option>
                                                <option>Video & Animation</option>
                                                <option>Music & Audio</option>
                                                <option>Programming & Tech</option>
                                                <option>Data</option>
                                                <option>Business</option>
                                                <option>Lifestyle</option>
                                                



                                                
                                            </select>
                                    </div>
                                    <div class="col-sm-6">
                                          <input type="text" name="skill" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Enter your skill">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="certification" class="form-control form-control-user "
                                            id="exampleInputPassword" placeholder="Your Certifications">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="education" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Your Educational Qualifications">
                                    </div>
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
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                               
                            </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
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