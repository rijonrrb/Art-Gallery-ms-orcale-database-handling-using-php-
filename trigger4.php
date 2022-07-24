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

    if (empty($_POST["trigger4"])) 
    {  
        $inputErr = " Fill the blank"; 
        $flag = True;
    } 
    if(!$flag) 
    {
    $input = testdata($_POST["trigger4"]);

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
include 'dbtrigger.php';
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
  <li id="list"><a id="hrf" class="active" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <h2>Tables: </h2>
  
<button type="button" class="collapsible">A table to monitor PURCHASE_HISTORY table to identify when, who and what operations are happened in this table by using a trigger</button>
<div class="content">
<?php
$users = sql1();
?>
</div>
<button type="button" class="collapsible">A table to monitor ART01  table to identify when, who and what operations are happened in this table by using a trigger</button>
<div class="content">
<?php
$users = sql2();
?>
</div>
<button type="button" class="collapsible">A table to monitor ART01 table to identify updated price and price difference between old price and new price by using a trigger</button>
<div class="content">
<?php
$users = sql3();
?>
</div>

<button type="button" class="collapsible">Trigger Enable/Disable</button>
<div class="content">
 <form id="form1" name="form1" action="trigger1.php" method="POST" novalidate >
  <br>
  <fieldset>
  <label for="trigger1">Select Trigger (purchase_history_trigger) Enable/Disable: </label>
  <select name="trigger1" required>
    <option></option>
    <option value="enable">enable</option>
    <option value="disable">disable</option>
  </select>
 <input type="submit" value="Submit">
 <br> <br> 
</fieldset>
</form>

 <form id="form2" name="form2" action="trigger2.php" method="POST" novalidate >
  <br>
  <fieldset>
  <label for="trigger2">Select Trigger (Monitor_P_HISTORY) Enable/Disable: </label>
  <select name="trigger2" required>
    <option></option>
    <option value="enable">enable</option>
    <option value="disable">disable</option>
  </select>
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>

 <form id="form3" name="form3" action="trigger3.php" method="POST" novalidate >
  <br>
  <fieldset>
  <label for="trigger3">Select Trigger (Monitor_ART01_table) Enable/Disable: </label>
  <select name="trigger3" required>
    <option></option>
    <option value="enable">enable</option>
    <option value="disable">disable</option>
  </select>
 <input type="submit" value="Submit">
 <br> <br>
</fieldset>
</form>

 <form id="form4" name="form4" action="trigger4.php" method="POST" novalidate >
  <br>
  <fieldset>
  <label for="trigger4">Select Trigger (price_trigger) Enable/Disable: </label>
  <select name="trigger4" required>
    <option></option>
    <option value="enable">enable</option>
    <option value="disable">disable</option>
  </select>
 <input type="submit" value="Submit">
 <br> <br>
   <?php
$users = sql7($input);
if($users){
echo "<h3>"."trigger $input"."</h3>";
  }
?>
</fieldset>
</form>

</div>
</div>

</body>
</html>
             
