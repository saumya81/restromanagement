<?php 

     if(!preg_match('/^[0-9]{10}+$/', $number))
         {
   $_SESSION['msg']="<h1>Invalid mobile number !!</h1>"; 
         header('Location:../adminregistration.php');
}
    
 if(isset($_POST['submit']))
{
     $name=$_POST['name'];
     $number=$_POST['number'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $about=$_POST['about'];
     
    include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
       
        $q="insert into admindb(name,email,password,mobile,about) values ('$name','$email',$password,'$number','$about');";

        if($con->query($q))
        {
           
            session_start();
    $_SESSION['name']= $name;
    $_SESSION['msg']="You have successfully registered!";
            header('Location:../dashboard.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
