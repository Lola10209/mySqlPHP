<?php
$username = $_POST['username'];
$mypassword = $_POST['mypassword'];

if(!empty($username) || !empty($mypassword)){
    $encryptedpassword = md5($mypassword);
    $host = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $databasename = "student_information_management";
 //create a connection to the data base
    $conn = new mysqli($host,$databaseUsername,$databasePassword,$databasename);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT username from admintable where username = ? Limit 1";   //note; code is from the phpsql database.
        $INSERT = "INSERT Into admintable (username, mypassword) values(?,?)";

    // prepare statement
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rownum = $stmt->num_rows;
        if($rownum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$username,$encryptedpassword);
            $stmt->execute();
            echo "new row inserted successfully";
        }else{
            $stmt->close();
            $conn->close();
        }
    }
}else{
    echo "All fields are required";
    die();
}

    


?>
<!-- $ is used as a variable in php.  ! means not in php. || means OR. . means concantenation(add up)-->
<!-- data base contains tables -->
<!--there are 3 ways in writing my sql. its include pdo, squli, sql -->
<!-- -> means . in php code -->