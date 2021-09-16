<?php

    require_once('connection.php');
    session_start();
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $sql = "SELECT * FROM lancer WHERE id = '$id'";
        $result = mysqli_Query($connect, $sql);

        $row = mysqli_fetch_assoc($result);
        $userid = $row['id'];
        $first = $row['first'];
        $last = $row['last'];
        $email = $row['email'];
        $location = $row['location'];
        $date = $row['date1'];
        $profile = $row['profile'];
        $discription = $row['discription'];
        $profession = $row['profession'];
        $skill =$row['skills'];
        $certification = $row['certification'];
        $education = $row['education'];
        $total = $row['total'];

        
       
        
    }else{
        $error = "please login first";
        header('location: login.php?error='.$error);
    }   

    $server = $_SERVER['PHP_SELF'];
    $newserver = explode('/', $server);
    $getter = end($newserver);

    $pagetittle = '';
    switch ($getter) {
        case 'dashboard.php':
            $pagetittle = 'Dashboard';
            break;
        case 'index.php':
            $pagetittle = 'Home';
            break;
        case 'jobs.php':
            $pagetittle = 'Jobs';
            break;
        case 'testimonial.php':
            $pagetittle = 'Testimonial';
            break;
        
        
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$pagetittle?></title>

   
    <link href="../public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../public/bootstrap-4.5.3-dist/css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../assets/boot4/css/font-awesome/css/font-awesome.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="">

        <!-- Sidebar -->
        <ul class="navbar-nav side-bg sidebar sidebar-dark accordion" id="accordionSidebar">

            
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../public/index.php">
                <img class="dashlogo" src="../assets/img/logo1.jpg" alt="" srcset="">
            </a>
            
            <div class="sidebar-heading dashIterface ">
                Interface
            </div>

            <li class="nav-item <?php if($pagetittle == 'Dashboard'){
                echo 'active';
            } ?>">
                <a class="nav-link" href="../public/dashboard.php?id=<?php echo base64_encode($id); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

              <li class="nav-item <?php if($pagetittle == 'Home'){
                echo 'active';
            } ?>">
                <a class="nav-link" href="../public/index.php">
                    <i class="fa fa-home"></i>
                    <span>Home</span></a>
            </li>

           
            
           
            <hr class="sidebar-divider">

        
            <div class="sidebar-heading">
                Finance
            </div>

          

          
          

        
            <li class="nav-item <?php if($pagetittle == 'Jobs'){
                echo 'active';
            } ?>">
                <a class="nav-link" href="../public/jobs.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Job evaluation</span></a>
            </li>

             <li class="nav-item <?php if($pagetittle == 'Testimonial'){
                echo 'active';
            } ?>">
                <a class="nav-link" href="../public/testimonial.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Testimonial</span></a>
            </li>


           
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
      

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                   
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn searchicon " type="button">
                                    <i class="fas fa-search fa-sm "></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2" value="<?php echo $current_user_id; ?>">
                                        <div class="input-group-append">
                                            <button class="btn searchicon" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $first." ".$last; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../includes/profile/<?=$profile?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../public/profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                              
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../public/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>


               