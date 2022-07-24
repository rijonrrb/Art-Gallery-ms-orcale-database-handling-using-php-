<?php
   include 'Connection.php';
   function sql1($id,$t_title,$p_price,$c_id)
   {
   $conn = connect();
   $sql = 'BEGIN insert_art(:id, :t_title, :p_price, :c_id); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':id',$id,32);
   oci_bind_by_name($stmt,':t_title',$t_title,32);
   oci_bind_by_name($stmt,':p_price',$p_price,32);
   oci_bind_by_name($stmt,':c_id',$c_id,32);
   $res= oci_execute($stmt);
   return $res;
   }
   function sql2($id,$p_price,$p_date)
   {
   $conn = connect();
   $sql = 'BEGIN insert_PURCHASE_HISTORY(:id, :p_price, :p_date); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':id',$id,32);
   oci_bind_by_name($stmt,':p_price',$p_price,32);
   oci_bind_by_name($stmt,':p_date',$p_date,32);
   $res= oci_execute($stmt);
   return $res;
   }
   function sql3($id,$p_price,$p_date)
   {
   $conn = connect();
   $sql = 'BEGIN update_PURCHASE_HISTORY(:id, :p_price, :p_date); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':id',$id,32);
   oci_bind_by_name($stmt,':p_price',$p_price,32);
   oci_bind_by_name($stmt,':p_date',$p_date,32);
   $res= oci_execute($stmt);
   return $res;
   }
   function sql4($id)
   {
   $conn = connect();
   $sql = 'BEGIN delete_PURCHASE_HISTORY(:id); END;';
   $stmt = oci_parse($conn,$sql);
   oci_bind_by_name($stmt,':id',$id,32);
   $res= oci_execute($stmt);
   return $res;
   }
?>