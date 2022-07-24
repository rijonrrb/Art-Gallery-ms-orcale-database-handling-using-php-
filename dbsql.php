<?php
   include 'Connection.php';
   function sql1()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from purchase_history where purchase_date= (select min(purchase_date) from purchase_history)");       
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


   function sql2()
   {
   $conn = connect();
   $s = oci_parse($conn, "select admin.name as Admin_name, count(*) as Number_of_Artist from admin group by admin.name");       
   $res= oci_execute($s);
   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>Admin_Name</th>"; 
   echo "<th>Number_Of_Artist</th>"; 
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
   $s = oci_parse($conn, "select * from artist where dob = (select min(dob) from artist)");       
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


   function sql4()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from manager01 where name NOT In (select name from manager01 where address = 'dhaka')");       
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



   function sql5()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from art01 a,purchase_history p where a.customer_id = p.customer_id and p.price=(select max(avg(price)) from purchase_history group by price)");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ART_ID</th>"; 
   echo "<th>TITLE</th>"; 
   echo "<th>PRICE</th>";
   echo "<th>CUSTOMER_ID</th>";
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

   function sql6()
   {
   $conn = connect();
   $s = oci_parse($conn, "select art_id,title,price from art01 where price=(select max(price) from art01 where price <(select max(price) from art01))");       
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

   function sql7()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from art01 where price = (select min(price) from art01)");       
   $res= oci_execute($s);

   echo "<table id='table'>";
   echo "<tr>";
   echo "<th>ART_ID</th>"; 
   echo "<th>ART_ID</th>"; 
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

      function sql8()
   {
   $conn = connect();
   $s = oci_parse($conn, "select * from art01 where price = (select min(price) from art01)");       
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
     
      function sql9($input)
   {
   $conn = connect();
   $s = oci_parse($conn, "select admin.* from admin,artist where admin_id='$input' and admin.artist_id=artist.artist_id");       
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
?>