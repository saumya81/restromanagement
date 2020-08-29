
<div class='container'> 
        <div class='card-columns'>
       
   <?php 
        include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);

        $q="select * from food";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
          
	       $_SESSION['restro']= $row['restaurant']  ;
            $_SESSION['food']=$row['name'];
            
                  if(isset($_SESSION['type']) && $_SESSION['type']=='veg'){
                      if($row['type']=='nonveg')
                      {continue;}
                      else{
                          echo "
        <div class='card shadow p-3 mb-5 bg-white rounded' >
        <img src='./admin/img/".$row['image']."' width='315' height='200' />
        <h3 class='card-title'>".$row['name']."</h3>
        <div class='card-body bg-danger text-center'><h6>Price: Rs ".$row['price']."/-<br>Restaurant:".$row['restaurant']."</h6>
        
        <a class='btn btn-light' href='./customer/order.php?food=".$row['name']."& restro=".$row['restaurant']."'>Order Now</a>
        </div>
        </div>
        ";
        
        }
                  }
            else if(isset($_SESSION['type']) && $_SESSION['type']=='nonveg'){
                if($row['type']=='veg')
                      {continue;}
                      else{
                echo "
        <div class='card shadow p-3 mb-5 bg-white rounded' >
        <img src='./admin/img/".$row['image']."' width='315' height='200' />
        <h3 class='card-title'>".$row['name']."</h3>
        <div class='card-body bg-danger text-center'><h6>Price: Rs ".$row['price']."/-<br>Restaurant:".$row['restaurant']."</h6>
        
        <a class='btn btn-light' href='./customer/order.php?food=".$row['name']."& restro=".$row['restaurant']."'>Order Now</a>
        </div>
        </div>
        ";
                      }}
            else{
                echo "
        <div class='card shadow p-3 mb-5 bg-white rounded' >
        <img src='./admin/img/".$row['image']."' width='315' height='200' />
        <h3 class='card-title'>".$row['name']."</h3>
        <div class='card-body bg-danger text-center'><h6>Price: Rs ".$row['price']."/-<br>Restaurant:".$row['restaurant']."</h6>
        
        <a class='btn btn-light' href='./customer/order.php?food=".$row['name']."& restro=".$row['restaurant']."'>Order Now</a>
        </div>
        </div>
        ";
                
            }
            
                     
            
        
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>
            