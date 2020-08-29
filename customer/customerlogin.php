

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="css/customerlogin.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<body style=" background-image: url('../img/11.jpg'); " >
    <?php include'../includefile/nav.php' ?>
    <?php
session_start();
$msg_error='';
if(isset($_SESSION['customermsg']))
{
    $msg_error=$_SESSION['customermsg'];
    echo "<center><h1>".$msg_error."</h1><center>";
    unset($_SESSION['customermsg']);
}

?>
   
<div class="container">
    <div class="card card-login mx-auto text-center bg-dark">
        <div class="card-header mx-auto bg-dark">
            <span> <img src="img/flogo.png" class="w-75" alt="Logo"> </span><br/>
                        
<!--            <h1>--><!--</h1>-->

        </div>
        <div class="card-body">
            <form action="cconlogin.php" method="post">
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="email" class="form-control" placeholder="Username">
                </div>

                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-outline-danger float-right login_btn">Login</button>
                </div>

            </form>
        </div>
    </div>
</div>
    </body>