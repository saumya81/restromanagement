<?php include'includefile/header.php' ?>
<link rel="stylesheet" type="text/css" href="css/add.css"></head>
<body style=" background-image: url('../img/3.jpg'); ">
    <?php include'includefile/adminnav.php' ?>
    

   <section class="testimonial py-5" id="testimonial">
<div class="container">
    <h1>Add your food category here!!</h1>
    <div class="card">
        
            <div class="add">
  <form method="POST" action="connection/addcategorycon.php">
    
      <input name="title" placeholder="Title" type="text" />
      <br>
      <textarea placeholder="Write description" name="description"></textarea>
      <br>
      
      <button type="submit" name="submit">ADD</button>
      <br>
      
      
      
  </form>
</div>
    </div></div>
    
    
    </section>
    
    </body>


</html>