<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ART GALLERY</title>
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
  height: 142%;
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





.footer{
  width: 100%;
  position: relative;
  height: auto;
  background-color: #36454F;
  color: white;
}
#fp
{
	font-size: 18px;
 padding:18px 26px;
}

.container1
{
display: block;
align-content: center;
padding-top: 50px;
}

.container2
{
display: block;
align-content: center;
padding-top: 50px;
}
.container3
{
display: block;
align-content: center;
padding-top: 50px;
}
.card{
  width: 150px;
  height: 250px;
  display: inline-block;
  padding-left: 10px;
  padding-right: 25px;
  box-sizing: border-box;
  cursor: zoom-in;
  
  background-position: center;
  background-size: cover;
  transition: transform 0.5s;
}

.card:hover
{
  transform: translateY(-28px);
}
img{
  border-radius: 10px;
  width:120%; 
  height: 110%;
}
</style>
</head>
<body>

<div id="cd">
<a id="top" href="Login.php">Logout</a>
<a id="top" href="Home.php" style="float: left;">ABC ART GALLERY</a>
<br><br><br>
</div>

<ul id="ulist"> 
  <li id="list"><a id="hrf" class="active" href="Home.php">Home</a></li>
  <li id="list"><a id="hrf" href="table.php">Tables</a></li>
  <li id="list"><a id="hrf" href="sql.php">Searching (SQL Queries)</a></li>
  <li id="list"><a id="hrf" href="view.php">Tables from View</a></li>
  <li id="list"><a id="hrf" href="plsql.php">PL/SQL Queries</a></li>
  <li id="list"><a id="hrf" href="trigger.php">Trigger</a></li>
  <li id="list"><a id="hrf"  href="dml1.php">DML OPERATION</a></li>
</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
<div class="container1">
    <div class="card">
    <img src="ab1.jpg" >
    </div>
    <div class="card">
    <img src="ab2.jpg">
    </div>
    <div class="card">
    <img src="ab3.jpg">
    </div>
    <div class="card">
    <img src="ab4.jpg">
    </div>
    <div class="card">
    <img src="ab5.jpg">
    </div>
</div>
<div class="container2">
    <div class="card">
    <img src="ab6.jpg">
    </div>
    <div class="card">
    <img src="ab7.jpg">
    </div>
    <div class="card">
    <img src="ab8.jpg">
    </div>
    <div class="card">
    <img src="ab9.jpg">
    </div>
    <div class="card">
    <img src="ab10.jpg">
    </div>

</div>
<div class="container3">
    <div class="card">
    <img src="ab3.jpg">
    </div>
    <div class="card">
    <img src="ab7.jpg">
    </div>
    <div class="card">
    <img src="ab5.jpg">
    </div>
    <div class="card">
    <img src="ab2.jpg">
    </div>
    <div class="card">
    <img src="ab9.jpg">
    </div>

</div>

</div>

<div class="footer">
	<p id ="fp">The ABC Gallery of Art, founded as a gift to the nation, serves as a center of visual art, education, and culture. Our collection of more than 150,000 paintings, sculpture, decorative arts, photographs, prints, and drawings spans the history of Western art and showcases some of the triumphs of human creativity. Across 363 days a year, the ABC Gallery offers a full spectrum of special exhibitions and public programs free of charge.</p>
    <br>
    <P id ="fp">Email : abc@gmail.com</P>
    <P id ="fp">Phone : +88012345678</P>
    <br>
	<p style="text-align: center;">© Uni4, 2022 Copyright </p>
</div>
</body>
</html>
             
