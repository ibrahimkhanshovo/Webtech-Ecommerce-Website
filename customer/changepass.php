<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
  <link rel="stylesheet" href="style5.css">
  <script src="script20.js"></script>
</head>
<body>
<div class="wrapper">

     <?php 

session_start();
if (isset($_SESSION['name'])) {
  echo "<h1> <center> Change Password </center></h1><br><br>";
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
   
   
    <div class="input_field">
        <input type="text" placeholder="New Password" id="password">
    </div>
    <div class="input_field">
        <input type="text" placeholder="Re-Type New Password" id="cpassword">
    </div>
   
    <div class="btn">
        <input type="submit">
    </div>
  </form>
</div>
</body>
</html>