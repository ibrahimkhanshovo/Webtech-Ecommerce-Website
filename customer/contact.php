<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <link rel="stylesheet" href="style5.css">
  <script src="scripts.js"></script>
</head>
	

<body>

<div class="wrapper">

  
     <?php 

session_start();
if (isset($_SESSION['name'])) {
  echo "<h1> <center> Contact Us </center></h1><br><br>";
  echo "<a href ='index.php'><span style='color: blue'><center> back to profile page</center></a><br>";
  echo "<a href ='logout.php'><span style='color: blue' ><center>logout<center></a>";

}

else{
    echo "<script>location.href='login.php'</script>";
}

 ?>  
 <br><br>
 <div id="error_message"></div>
  <form id="myform" onsubmit="return validate();">    
 <br><br>
    <div class="input_field">
        <input type="text" placeholder="Subject" id="subject">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Phone" id="phone">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Email" id="email">
    </div>
    <div class="input_field">
        <textarea placeholder="Message" id="message"></textarea>
    </div>
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>

</body>
</html>


   