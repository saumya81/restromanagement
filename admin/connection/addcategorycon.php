<?php 
 if(isset($_POST['submit']))
{
     $title=$_POST['title'];
     $description=$_POST['description'];
     $restaurant=$_POST['restroname'];
     
include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
       
        $q="insert into category(title,description) values ('$title','$description');";

        if($con->query($q))
        {
           
            session_start();
    
    $_SESSION['msg']="You have successfully added new category!";
            header('Location:../dashboard.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
