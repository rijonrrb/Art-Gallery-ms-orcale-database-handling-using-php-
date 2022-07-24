<?php
   include 'Connection.php';
   function sql1($aid)
   {
   $conn = connect();
   $sql = 'BEGIN artistt(:aid, :anm, :adob, :atype); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':aid',$aid,32);
   oci_bind_by_name($stmt,':anm',$anm,32);
   oci_bind_by_name($stmt,':adob',$adob,32);
   oci_bind_by_name($stmt,':atype',$atype,32);
   oci_execute($stmt);
   echo "Name : $anm<br>";
   echo "DOB : $adob<br>";
   echo "Artist Type: $atype<br>";
   }
   function sql2()
   {
   $conn = connect();
   $sql = 'BEGIN art_sal05(:aprc); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':aprc',$aprc,32);
   oci_execute($stmt);
   echo "Highest Price : $aprc<br>";
   }
   function sql3($aid)
   {
   $conn = connect();
   $sql = 'BEGIN ABC_details.admin_prooc(:aid,:add , :aem, :anm, :aaid, :ac); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':aid',$aid,32);
   oci_bind_by_name($stmt,':add',$add,32);
   oci_bind_by_name($stmt,':aem',$aem,32);
   oci_bind_by_name($stmt,':anm',$anm,32);
   oci_bind_by_name($stmt,':aaid',$aaid,32);
   oci_bind_by_name($stmt,':ac',$ac,32);
   oci_execute($stmt);
   echo "ID : $aid<br>";
   echo "Address : $add<br>";
   echo "Email : $aem<br>";
   echo "Name : $anm<br>";
   echo "Artist ID : $aaid<br>";
   echo "Customer ID : $ac<br>";
   }
   function sql4($ano)
   {
   $conn = connect();
   $sql = 'BEGIN ABC_details.arttt(:ano); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':ano',$aid,32);
   $res= oci_execute($stmt);
   echo "$res";
   }
   function sql5($MNO)
   {
   $conn = connect();
   $sql = 'BEGIN manage(:MNO); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':MNO',$aid,32);
   $res= oci_execute($stmt);
   echo "$res";
   }
?>