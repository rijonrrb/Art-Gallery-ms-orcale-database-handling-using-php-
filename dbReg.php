
<?php
    include 'Connection.php';
    function reg($name, $email, $password)
    {
    $conn = connect();
    $sql = oci_parse($conn, "INSERT INTO ACCOUNT (ACCOUNT_NO,name,email,password) VALUES (Account_sq.nextval, '$name','$email','$password')");       
    $res= oci_execute($sql);
    return $res;
    }
?>