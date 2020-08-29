
<div class='container'> 
        <div class='card-columns'>
       
   <?php 
         include'database.php';
    $con=mysqli_connect($host,$user);

        mysqli_select_db($con,$database);
        $q="select * from category";
        $res=$con->query($q);
        $rowCount=$con->affected_rows;
        
        if($rowCount>0)
        {
        while($row = $res->fetch_assoc())
        {
            
            
        echo "
        <div class='card shadow p-3 mb-5 bg-white rounded'>
        
        <h5 class='card-title'>".$row['title']."</h5>
        
        <div class='card-body bg-info text-center'>".$row['description']."</h7><br>
        </div>
        </div> ";
            
        }
        }
        
        else 
        {
        echo "Not connected";
        }
 
?>
         