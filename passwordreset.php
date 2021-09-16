<?php 
    require_once('../includes/header.php');
?>


    <div class="bg-primary d-flex align-items-center"  style="height: 85vh;">
    <div class="container " style="background-color: white; width: 600px">
    <div class="col-md-12 col-md-push_3">
        <h3 class="text-center">Password Reset</h3> 
        <form action="../includes/passwordreset.php" method="POST">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <input type="hidden" name="email" value="<?php $_GET['email']?>">
                
            </div>
            
             
             <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="conpassword" class="form-control">
                
            </div>
          

             <div class="form-group">
                <button class="btn btn-success" name="submit">Submit</button>
                
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

        
        </form>
    </div>
    
    </div>
</div>


    <script type="text/javascript" src="../assets/jquery3.js"></script>
<script type="text/javascript" src="../assets/boot5/dist/js/bootstrap.js"></script>

</body>
</html>