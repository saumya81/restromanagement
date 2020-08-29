<?php include'includefile/header.php' ?>
<?php include'includefile/navindex.php' ?>
  
<br><br>
<center><h1><i>Your Previous Orders</i></h1></center>
<br><br>
<div class='container'> 
        <div class='card-columns'>
       
   <?php 
         include'includefile/database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
   
               $name=$_SESSION['customername'];

        $q="select * from orderdb where customername='$name' ORDER BY timeoforder DESC;";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        <div class='card shadow p-3 mb-5 bg-white rounded'>
        
        <h3 class='card-title'> Food:".$row['foodname']."</h3>
        <div class='card-body bg-danger text-center'>Time of Order:".$row['timeoforder']."
       <br>Order-id :".$row['order_id']."<br><br></h6>
      
        </div></div>";
            
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>
    <?php include'includefile/footer.php' ?>
