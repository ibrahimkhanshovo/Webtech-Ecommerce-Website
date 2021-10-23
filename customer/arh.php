
<!DOCTYPE html>
<html>
    <head>
        
        <title>Culb jersey</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
  
      <fieldset>
          <?php 

session_start();

if (isset($_SESSION['name'])) {
 
  echo "<a href ='index.php'><span style='color: blue'> <center>back to profile page</center></a><br><br>";
  echo "<a href ='logout.php'><span style='color: blue'><center>logout</center> </a><br>";


}

else{
    echo "<script>location.href='login.php'</script>";
}

 ?>     
    <legend align="center" style="font-size: 2.0em">Club jerseys</legend>

              
                  <center> <img src="1234.jpg"  width="300px" height="300px"></center>
              <center> <div class="col-2">
                <h1>Arsenal Home Kit</h1>
                <h4>PRICE : <span style='color: red'>৳700</h4>

                <select>
                  <th><option>Select Size</option></th>
                  <option>3XL</option>
                  <option>2XL</option>
                  <option>XL</option>
                  <option>Large</option>
                  <option>Medium</option>
                    <option>Small</option>
                    <br><br>
                    <input type="number" value="1">
                    <br><br>
                    <h3><a href="payment.php" class="btn"><span style='color: blue'>Add To Cart</a></h3>
                    
                    <br><br>
                    <h4><a href="contact.php" class="btn"><span style='color: blue'>Review</a></h4>
                      <br><br>
                    <h3>Product Details</h3>
                    <p><b>Replica Or Authentic:</b> Replica<br>
                        <b>Type of Team Badge:</b> Embroidered<br> 
                       <b>Material:</b>100 % Polyester<br></p>
                </select>
                 </center>
         

     
            </fieldset>
          </body>
</html>

