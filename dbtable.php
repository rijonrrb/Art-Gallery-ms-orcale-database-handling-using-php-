<?php
   include 'Connection.php';
   function MANAGER()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from Manager01");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>MANAGER_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>ADDRESS</th>";
   echo "<th>EMAIL</th>";
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


   function Gallery()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from Gallery01");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>GALLERY_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>LOCATION</th>";
   echo "<th>ART_ID</th>";
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

   function admin()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from admin");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ADMIN_ID</th>"; 
   echo "<th>ADDRESS</th>"; 
   echo "<th>EMAIL</th>";
   echo "<th>NAME</th>";
   echo "<th>ARTIST_ID</th>";
   echo "<th>CUSTOMER_ID</th>";
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


   function artist()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from artist");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ARTIST_ID</th>"; 
   echo "<th>NAME</th>"; 
   echo "<th>DOB</th>";
   echo "<th>TYPE</th>";
   echo "<th>ART_ID</th>";
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



   function customer()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from customer");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>CUSTOMER_ID</th>"; 
   echo "<th>ADDRES</th>"; 
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

   function Art()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from Art01");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ART_ID</th>"; 
   echo "<th>TITLE</th>"; 
   echo "<th>PRICE</th>";
   echo "<th>CUSTOMER_ID</th>";
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

   function Purchase()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from purchase_history");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>CUSTOMER_ID</th>"; 
   echo "<th>PRICE</th>"; 
   echo "<th>PURCHASE_DATE</th>";
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