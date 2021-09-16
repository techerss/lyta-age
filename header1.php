<?php
  require_once("connection.php");
  require_once('function.php');
  session_start();
     

  if (isset($_SESSION['id'])) {
     $id = $_SESSION['id'];
    $sql = "SELECT * FROM lancer WHERE id = '$id'";
    $result = mysqli_Query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $userid = $row['id'];
    $profile = $row['profile'];


  }

  $server = $_SERVER['PHP_SELF'];
    $newserver = explode('/', $server);
    $getter = end($newserver);

    $pagetittle = '';
    switch ($getter) {
        case 'hire.php':
            $pagetittle = 'Hiring';
            break;
        case 'index.php':
            $pagetittle = 'Home';
            break;
        case 'aboutus.php':
            $pagetittle = 'About us';
            break;
        
        
        
    }
    
 



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pagetittle?></title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/boot4/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/boot4/css/font-awesome/css/font-awesome.css">
    <!-- <link href="dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="dashboard/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>
<body id="page-top">


 
                      
        <!-- nav section -->
    
          <nav class="navbar navbar-expand-md navbar-dark navbg" id="navigation">
            <a class="navbar-brand active" href="loader.php"><img src="../assets/img/logo1.jpg" alt="" srcset="" style="width: 70px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon bg-primary" ></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarsExample04">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="aboutus.php">About us <span class="sr-only">(current)</span></a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="hire.php" >Hire</a>
                </li>
                
              </ul>
              <?php if (isset($_SESSION['id'])) {?>

                <div>
                  <li class="nav-item"><a style="color: black; text-decoration: none; font-weight: bold;" href="dashboard.php?=<?php echo base64_encode($id); ?>">Dashboard</a></li>
                </div>
              <?php } else{ ?>
              <form action="../includes/headerlog.php" method="POST" class="form-inline my-2 my-md-0">
                <?php if(isset($_GET['error'])){?>
                <label  class="alert alert-danger" style="color: red;" role="alert" ><?=urldecode($_GET['error'])?></label>
                
              <?php } ?>
                <input type="email" class="form-control" name="email" placeholder="email">
                <input class="form-control" type="password" name="password"  placeholder="pasword">

                <button href="index.php" type="submit" name="submit" class="btn btn-info">Sign in</button>

              <?php } ?>
                
              </form>
            </div>
          </nav>


   
