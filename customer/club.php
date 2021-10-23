<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <link rel="stylesheet" href="style4.css">
</head>
<body>    


   <div class="product-card">
    <div class="card-header">
      <div class="pic">
        <img src="logo.png" alt="">
      </div>
      <?php 

session_start();

if (isset($_SESSION['name'])) {
  echo "<h1>Welcome ". $_SESSION['name']." to product page</h1>";
  echo "<a href ='index.php'><span style='color: pink'> back to profile page</a><br>";
  echo "<a href ='logout.php'><span style='color: pink'> logout</a>";

}

else{
    echo "<script>location.href='login.php'</script>";
}

 ?>       
  <br><br>  
      <div class="desc">SPORTS WORLD</div>
      
      <h1><span style="color: #20DFD9">PRODUCT LIST</span></h1>
      <a href="arh.php" class="contact-btn">Arsenal Home Kit</a>
      <a href="ajax.php" class="contact-btn"> Ajax Away Kit</a>
      

      <br><br><br><br>
      <h3 class="con">Contact Us</h3>
      <div class="sm">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-youtube"></a>
      </div>
    </div>
  </body>
</html>










