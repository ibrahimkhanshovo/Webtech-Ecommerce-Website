<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
.error {color: #FF0000;}
</style>
    </head>
    <body>

    <?php
// define variables and set to empty values



$name = $email  =   "";
$nameErr = $emailErr  =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        
          <?php include 'header.php' ?>

             <fieldset>
    <legend align="center" style="font-size: 2.0em">Edit Profile</legend>
             <form action="edit.php" method="get" align="center">

               

  <br><br>



  <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>NAME</td>
      <td><input type="text" name="name" size="30" required="1"></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="text" name="email" size="30" required="1"></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1998-01-01" required="1"></td>
    </tr>
    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
      
    </td>
    </tr>

    <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="update" value="Update"</td>
        </tr>

  </table>
</form>
</table>
  </fieldset>
   

     <?php include 'footer.php' ?>
</html>



 


