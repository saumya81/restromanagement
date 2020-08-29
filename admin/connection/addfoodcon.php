<?php 
 if(isset($_POST['submit']))
{
     $filename = $_FILES["uploadfile"]["name"]; 
    $tempname = $_FILES["uploadfile"]["tmp_name"];     
        $folder = "../img/".$filename; 
     $name=$_POST['name'];
     $type=$_POST['type'];
     $category=$_POST['category'];
     $price=$_POST['price'];
     $restaurant=$_POST['restroname'];
     
include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
       
        $q="insert into food(name,category,price,restaurant,type,image) values ('$name','$category','$price','$restaurant','$type','$filename');";
 if (move_uploaded_file($tempname, $folder))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
        if($con->query($q))
        {
           
            session_start();
    
    $_SESSION['msg']="You have successfully added new food!";
            header('Location:../dashboard.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
}

?>
