<?php include'includefile/header.php' ?>
<link rel="stylesheet" type="text/css" href="css/add.css"></head>
<body style=" background-image: url('../img/11.jpg'); ">
    <?php include'includefile/adminnav.php' ?>
    

   <section class="testimonial py-3" id="testimonial">

<div class="container">
    <h1>Add your food menu here!!</h1>
    <div class="card">
        
            <div class="add">
  <form method="POST" enctype="multipart/form-data" action="connection/addfoodcon.php">
    
      <input name="name" placeholder="Name" type="text" />
      <br>
      <input name="category" placeholder="Category" type="text" /><br>
      <input name="price" placeholder="price" type="text" /><br>
      <input name="restroname" placeholder="Your restaurant name" type="text" />
      <select name="formGender">
  <option value="" required>Select Type of food</option>
  <option value="veg">Veg</option>
  <option value="nonveg">Non-Veg</option>
</select>
 <br> <br> <br>
      <input type="file" name="uploadfile" placeholder="upload image" value="" /> 
      <button type="submit" name="submit">ADD</button>
      <br>
      
      
      
  </form>
</div>
    </div></div>
    
    </section>
    
    
    </body>


<?php include'includefile/footer.php' ?>