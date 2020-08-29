<?php include'includefile/header.php' ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style="margin-top:0px;">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img src="img/flogo.png" height="50" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
         
        
          
        <li class="nav-item active">
            
          <a class="nav-link" href="adminregistration.php">Register
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Main Site!</a>
        </li>
    
          
      </ul>
    </div>
  </div>
</nav>
<section class="testimonial py-5" id="testimonial">
    <?php
session_start();
$msg_error='';
if(isset($_SESSION['msg']))
{
    $msg_error=$_SESSION['msg'];
    echo $msg_error;
    unset($_SESSION['msg']);
} ?> 
    <div class="container">
        <div class="row ">
            
            <div class="col-md-4 py-5 bg-danger text-white text-center ">
                <div class=" ">
                    <div class="card-body">
                        <img src="img/flogo.png" style="width:100%">
                        <h2 class="py-3">Registration</h2>
                        <p>Register your restaurant here and become a member of FoodShala family!!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5 border">
                <h4 class="pb-4">Please fill with your details</h4>
                <form action="connection/conregister.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                          <input  name="name" placeholder="Restaurant Name" class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input  name="number" placeholder="Mobile No." class="form-control" required="required" type="text">
                        </div>
                        <div class="form-group col-md-6">
                            <input  name="password" placeholder="Password" class="form-control" required="required" type="password">
                        </div>
                     
                        <div class="form-group col-md-12">
                                  <textarea  name="about" placeholder="About your restaurant"cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    
                    
                   <div class="form-row">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                        
                    </div>
                    <div><p>Already Registered ? <a href="index.php" class="btn btn-danger">Login</a></p></div>
                   <div><p> Else wanna go to main site <a href="../index.php" class="btn btn-danger">Main Site</a></p></div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include'includefile/footer.php' ?>
