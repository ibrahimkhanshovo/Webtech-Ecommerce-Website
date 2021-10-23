
<!DOCTYPE html>
<html>
    <head>
        
        <title>Product</title>
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
    <legend align="center" style="font-size: 2.0em">Cricket Bat</legend>

              
                  <center> <img src="190.jpg"  width="300px" height="300px"></center>
              <center> <div class="col-2">
                <h1>MRF Cricket Bat</h1>
                <h4>PRICE : <span style='color: red'>৳650</h4>

                <select>
                  <th><option>Select Size</option></th>
                 
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
                    <p><b>Replica Or Authentic wooden:</b> Willow wooden Bat<br>
                        <b>Type of Team Strickers:</b> Real MRF<br> 
                       <b>Material:</b>100 % willow wooden<br></p>
                </select>
                 </center>
         

            </fieldset>
          </body>
</html>

