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
$inputErr = "";  
$input = ""; 
$flag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if (empty($_POST["input"])) 
    {  
        $inputErr = " Fill the blank"; 
        $flag = True;
    } 
    if(!$flag) 
    {
    $input = testdata($_POST["input"]);

  }
 }
function testdata($data) {  
$data = trim($data);  
$data = stripslashes($data);  
$data = htmlspecialchars($data);  
return $data;  
}
?>
<?php
include 'dbplsql.php';
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
  <li id="list"><a id="hrf" class="active" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf"  href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>
  
<button type="button" class="collapsible">A procedure which will take artist id as an input and show the artist name,date of birth and type of the art.</button>
<div class="content">
   <form id="form1" name="form1" action="plsql1.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Artist ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
  <fieldset>
</form>

</fieldset>
</div>
<button type="button" class="collapsible">A procedure which will find out the art which have highest price.</button>
<div class="content">
<br>
<fieldset>
<?php
$users = sql2();
?>
</fieldset>
</div>
<button type="button" class="collapsible">A procedure which will take admin id as an input and show all the details of admin and also which customer and artist are they administrating.</button>
<div class="content">
   <form id="form1" name="form1" action="plsql3.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">ADMIN ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
 <?php
$users = sql3($input);
?>
</fieldset>
</form>
</div>
<button type="button" class="collapsible">A procedure which will take Artist ID as an input and show the Art title and price.</button>
<div class="content">
   <form id="form1" name="form1" action="plsql4.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Artist ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>
<button type="button" class="collapsible">A procedure which will take Manager ID as an input and show the Art id, gallery name and gallery location.</button>
<div class="content">
   <form id="form1" name="form1" action="plsql5.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Artist ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>
<button type="button" class="collapsible">A function where 20% of overall price of the ART01 table are calculated.</button>
<div class="content">
   <form id="form1" name="form1" action="plsql6.php" method="POST" novalidate >
  <br>
  <fieldset>
 <label for="input">Artist ID:</label>
 <input type="number" name="input" id="input">
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>
</div>
</div>
</body>
</html>
             
