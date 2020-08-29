<?php include'includefile/header.php' ?>

<body >


    <?php include'includefile/adminnav.php' ?>
<div class="section white-text center" >
<br><br><div class="container" >
 <?php
session_start();
$msg='';
$name=$_SESSION['name'];
if(isset($_SESSION['msg']))
{
    $msg=$_SESSION['msg'];
    
    echo "Hey ".$name." ".$msg;
     unset($_SESSION['msg']);
    
}

?>
	<center><h1>Dashboard</h1></center>
	<center><h1><?php   echo "Hey ".$name; ?></h1></center>
	<center><div class="row" >
        <div class="card" style="width: 18rem;margin:20px;">
  <img class="card-img-top" src="img/10.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Categories</h5>
    
    <a href="admincategory.php" class="btn btn-primary">Go To Categories</a>
  </div>
</div>
        
        <div class="card" style="width: 18rem;margin:20px;">
  <img class="card-img-top" src="img/12.jfif" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Foods</h5>
 
    <a href="adminfood.php" class="btn btn-primary">Go To Food</a>
  </div>
</div>
        <div class="card" style="width: 18rem; margin:20px;">
  <img class="card-img-top" src="img/13.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Order Received</h5>
    
    <a href="orderreceived.php?name=<?php echo $name; ?>" class="btn btn-primary">Go To Orders</a>
  </div>
</div>
       
        <div class="card" style="width: 18rem; margin:20px;">
  <img class="card-img-top" src="img/13.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Add More Categories</h5>
    
    <a href="addcategory.php" class="btn btn-primary">ADD Category</a>
  </div>
</div>
       
        <div class="card" style="width: 18rem; margin:20px;">
  <img class="card-img-top" src="img/13.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Add More Menu</h5>
    
    <a href="addfood.php" class="btn btn-primary">Add Menu</a>
  </div>
</div>
       

        </div></center></div>

</div>


</body>






















<?php include'includefile/footer.php' ?>