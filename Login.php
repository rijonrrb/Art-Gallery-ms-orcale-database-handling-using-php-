<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ART GALLERY</title>
<link rel="stylesheet" href="loginn.css"></link>
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
include 'dblogin.php';
$emailErr = $passwordErr = "";
$login = "";
$flag = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{ 


if (empty($_POST["email"])) 
    {  
       $emailErr = " email is required";
       $flag = True;  
    } 

if (empty($_POST["password"])) 
    {  
       $passwordErr = " Password is required";
       $flag = True;  
    } 
 
if(!$flag) 
    {

    $email = input_data($_POST["email"]);
    $password = input_data($_POST["password"]); 
    
    $res = login($email,$password);
            if($res) {
        $login = "Logged In";
        }
        else
        {
            $login = "Wrong email or password";
        }

    
    }


}
  function input_data($data) 
  {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
  }

?>


<div id="cd">
<span style="color: blue"></span><a href="Reg.php">Create New Account</a>
<br><br><br></div>
<br><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" name ="login">
        <div style= "text-align:center"><h1>Login Form</h1></div>
        <fieldset id="fd">
            <legend><h3>User Info</h3></legend>
            <label for="email">User Email:</label>
            <input type="email" name="email" id="email" >
            <span style="color: red"><?php echo $emailErr; ?> </span><br><br>
            </span><label for="password">User Password:</label>
            <input type="password" name="password" id="password" >
            <span style="color: red"><?php echo $passwordErr; ?> </span><br><br>
            <input type="submit" name="submit" value="Login" id="subb">
             <div style= "text-align:center"><span style="color: red"><?php echo "<h1>". $login . "</h1>"?> </span></div>
        </fieldset>
    </form> 

</body>
</html>
             
