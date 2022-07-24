<?php
   include 'Connection.php';

   function sql1()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from admin_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ADMIN_ID</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>EMAIL</th>";
   echo "<th>NAME</th>";
   echo "<th>ARTIST_ID</th>";
   echo "<th>TYPE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }

   function sql2()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from discount");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ART_ID</th>"; 
   echo "<th>TITLE</th>"; 
   echo "<th>PRICE</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }
   
   function sql3()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from location_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>CUSTOMER_ID</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>NAME</th>";
   echo "<th>DOB</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }
   function sql4()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from artist_view");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ARTIST_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>TITLE</th>";
   echo "<th>GALLERY_ID</th>";
   echo "</tr>";
   while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   echo '<tr>';
   foreach ($row as $item) 
   {
       echo '<td>'.($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp').'</td>';
   }
   echo '</tr>';
   }
   echo '</table>';
   }
 
?>