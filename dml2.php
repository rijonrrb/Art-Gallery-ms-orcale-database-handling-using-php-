<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ART GALLERY</title>
<link rel="stylesheet" href="table.css"></link>
<style>
body {
  margin: 0;
}
#cd{
 background-color:navy;
 box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 8px 5px 0 rgba(0, 0, 0, 0.24)
 }
 #top{
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
 #top:hover
 { opacity: 1;
 background-color:red;
 color:white;
 }
#ulist {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 25%;
  background-color: #f1f1f1;
  position: absolute;
  height: 320%;
  overflow: auto;
}

#list #hrf {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

#list #hrf.active {
  background-color: #04AA6D;
  color: white;
}

#list #hrf:hover:not(.active) {
  background-color: #555;
  color: white;
}


.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.content {
  padding: 0 18px;
  background-color: #f1f1f1;
}

</style>
</head>
<body>
  <?php
include 'dbdml.php';
?>

  <?php
$flag = false;
$dml ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["id"])) 
    {  
        $idErr = " Fill the blank"; 
        $flag = True;
    } 
        if (empty($_POST["p_price"])) 
    {  
        $p_priceErr = " Fill the blank"; 
        $flag = True;
    } 
        if (empty($_POST["p_date"])) 
    {  
        $p_dateErr = " Fill the blank"; 
        $flag = True;
    } 
    if(!$flag) 
    {
    $id = testdata($_POST["id"]);
    $p_price = testdata($_POST["p_price"]);
    $p_date = testdata($_POST["p_date"]);
    
    $users = sql2($id,$p_price,$p_date);
    if($users){
     $dml = "Value Inserted";
  }
  }
 }
function testdata($data) {  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
?>
<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" style="float: left;">ABC ART GALLERY</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf"  href="Home.php">Home</a></li>
  <li id="list"><a id="hrf"  href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  class="active"href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>
  

<button type="button" class="collapsible">Trigger Enable/Disable</button>
<div class="content">
  <form id="form1" name="form1" action="dml1.php" method="POST" novalidate >
  <br>
  <fieldset>
    <legend><h3>Art Table value Insert</h3></legend>
    <label for="id">Enter id:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank"><br><br>
    <label for="t_title">Enter title:</label>
    <input type="text" id="t_title" name="t_title" placeholder="Please fill this blank"><br><br>
    <label for="p_price">Enter price:</label>
    <input type="text" id="p_price" name="p_price" placeholder="Please fill this blank">
    <br><br>
      <label for="c_id">Enter id:</label>
    <input type="text" id="c_id" name="c_id" placeholder="Please fill this blank"><br><br>
 <input type="submit" value="Submit">
 <br> <br> 

 <br> <br> 
</fieldset>
</form>

 <form id="form2" name="form2" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" novalidate >
  <br>
  <fieldset>
    <legend><h3>PURCHASE HISTORY Table value Insert</h3></legend>
    <label for="id">Enter id:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank"><br><br>
    <label for="p_price">Enter price:</label>
    <input type="text" id="p_price" name="p_price" placeholder="Please fill this blank">
    <br><br>
    <label for="p_date">Enter Date:</label>
    <input type="text" id="p_date" name="p_date" placeholder="Please fill this blank"><br><br>
  <input type="submit" value="Submit">
 <br> <br> 
   <?php
echo $dml;
?>
 <br> <br> 
</fieldset>
</form>

 <form id="form3" name="form3" action="dml3.php" method="POST" novalidate >
  <br>
  <fieldset>
    <legend><h3>PURCHASE HISTORY Table value Update</h3></legend>
    <label for="id">Enter id to update their values:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank"><br><br>
    <label for="p_price">Enter price:</label>
    <input type="text" id="p_price" name="p_price" placeholder="Please fill this blank">
    <br><br>
    <label for="p_date">Enter Date:</label>
    <input type="text" id="p_date" name="p_date" placeholder="Please fill this blank"><br><br>
  <input type="submit" value="Submit">
 <br> <br> 
 <br> <br> 
</fieldset>
</form>
 <form id="form4" name="form4" action="dml4.php" method="POST" novalidate >
  <br>
  <fieldset>
    <legend><h3>PURCHASE HISTORY Table value delete</h3></legend>
    <label for="id">Enter id to delete their values:</label>
    <input type="text" id="id" name="id" placeholder="Please fill this blank"><br><br>
    <label for="p_price">Enter price:</label>
  <input type="submit" value="Submit">
 <br> <br>
 <br> <br> 
</fieldset>
</form>
</div>
</div>

</body>
</html>
             
