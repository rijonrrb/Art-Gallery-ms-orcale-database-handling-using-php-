<!DOCTYPE html>
<html>
<head>
<title>ART GALLERY</title>
<link rel="stylesheet" href="reg.css"></link>
<style>
#cd{
 background-color:navy;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #cd a{
 float:right;
 display:block;
 color:white;
 text-align:center;
 padding:18px 16px;
 text-decoration:none;
 opacity: 0.8;
 transition: 0.8s;
 cursor: pointer;
 }
 #cd a:hover
 { opacity: 1;
 background-color:red;
 color:white;}
}
</style>
</head>
<body>

  <?php
include 'dbReg.php';
$nameErr = $emailErr = $passwordErr = "";  
$name = $email = $password = "";  
$successfulMessage = $errorMessage = "";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {  


    if (empty($_POST["name"])) 
    {  
        $nameErr = " Please fill the gap";
        $flag = True;  
    }

    if (empty($_POST["email"])) 
    {  
        $emailErr = " Please fill the gap";
        $flag = True;  
    } 

    if (empty($_POST["password"])) 
    {  
       $passwordErr = " Please fill the gap";
       $flag = True;  
    } 
    
    if(!$flag) 
    {
      $name = input_data($_POST["name"]);
      $email = input_data($_POST["email"]);
      $password = input_data($_POST["password"]);

        $res = reg($name, $email, $password);
        if($res) {
        $errorMessage = "successfully Registerd.";
        }
        else {
        $errorMessage = "Error Found.";
        }
    }
}
  function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?> 
<div id="cd">
<span style="color: blue"></span><a href="Login.php">Go Back</a>
<br><br><br></div>
<br><br><br>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="reg" >
  <h1 style="text-align: center;">Registration form</h1>
  <hr>
  <fieldset>
    <legend><h3>Personal Information</h3></legend>
    <label for="name">Enter your Name:</label>
    <input type="text" id="name" name="name">
    <?php echo $nameErr; ?>  <br><br>
    <label for="email">Enter your Email:</label>
    <input type="email" id="email" name="email">
    <?php echo $emailErr; ?>  <br><br>
    <label for="password">Enter your Password:</label>
    <input type="password" id="password" name="password">
    <?php echo $passwordErr; ?>  <br><br>
  </fieldset>
  <br><br><input type="submit" value="Register" id="subb">
</form>
 <br>
 <?php echo "<b>".$errorMessage."</b>"; ?>
</body>
</html>