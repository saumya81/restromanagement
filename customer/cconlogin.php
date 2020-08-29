<?php

if (!isset($_POST['email']) || !isset($_POST['password'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: customerlogin.php');

	exit();
}
include'database.php';
    
try {
    $pdoconn = new PDO("mysql:host=$host; dbname=$database", $user, $pwd, array( PDO::ATTR_PERSISTENT => true ));
    $pdoconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    throw new Exception();
    
}

$email=$_POST['email'];
$password=$_POST['password'];


$sql = "SELECT * FROM customerdb WHERE email='$email' AND password='$password'";

$query  = $pdoconn->prepare($sql);
$query->execute();
$arr_login=$query->fetchAll(PDO::FETCH_ASSOC);


if (count($arr_login) > 0) {

	foreach($arr_login as $val)
	{
	   $tmp_name= $val['name'];
       

	}
    foreach($arr_login as $val)
	{
	   $type= $val['type'];
       

	}


	session_start();
    $_SESSION['customername']=$tmp_name;
    $_SESSION['type']=$type;
    $_SESSION['customermsg']="You have successfully Logged In!";
    header('location: ../index.php');

} 
else {
	session_start();
	$_SESSION['customermsg']="Invalid Credentials!";
	header('location: customerlogin.php');
}

?>