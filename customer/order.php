<?php
session_start();
if (!isset($_SESSION['customername']) ) {
	$_SESSION['customermsg'] = "You must Log In First to Order Food!";
	header('location: ../customer/customerlogin.php');
	exit();
}
include'database.php';


    
try {
    $con = new PDO("mysql:host=$host; dbname=$database", $user, $pwd, array( PDO::ATTR_PERSISTENT => true ));
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    throw new Exception();
    
}


$name=$_SESSION['customername'];
$sql = "SELECT * FROM customerdb WHERE name='$name'";
$query  = $con->prepare($sql);
$query->execute();
$arr_order=$query->fetchAll(PDO::FETCH_ASSOC);


if (count($arr_order) > 0) {

	foreach($arr_order as $val)
	{
	   $email= $val['email'];
        $number= $val['number'];

	}
$food = $_REQUEST['food'];
    $restro = $_REQUEST['restro'];
$_SESSION['customermsg'] = 'Order has been confirmed';
   $id=rand();
	
    date_default_timezone_set("Asia/Kolkata");
    $time = date("d:m:Y h:i:sa");
   $status='pending';
        $q="insert into orderdb(order_id,restaurant,foodname,customername,number,timeoforder) values ('$id','$restro','$food','$name','$number','$time');";

        if($con->query($q))
        {
           
           
    
         $_SESSION['customermsg']="You have successfully placed the order! Your order-ID is : ".$id;
            header('Location:../index.php');

        }
        else
        {
            echo"Error: ".$con->error;
        }
    
 

} 
else {
	session_start();
    $_SESSION['customermsg'] = 'Order has aborted please try again after some time';
     header('Location: ../index.php');
    
	
}




	

    
    
?>