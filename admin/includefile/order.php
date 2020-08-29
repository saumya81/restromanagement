<div class='container'> 
        <div class='card-columns'>
       
   <?php 
         include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
               $restro = $_REQUEST['name'];

        $q="select * from orderdb where restaurant='$restro' ";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        <div class='card shadow p-3 mb-5 bg-white rounded'>
        
        <h3 class='card-title'> Food:".$row['foodname']."</h3>
        <div class='card-body bg-danger text-center'><h6>Customer Name :".$row['customername']."<br>Customer Number : ".$row['number']."<br>Time of Order:".$row['timeoforder']."
       <br>Order-id :".$row['order_id']."<br><br><a href='tel:".$row['number']."' class='btn btn-light'>Call Now</a></h6>
      
        </div></div>";
            
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>