<?php
$email = $_POST['email'];
$userpassword = $_POST['userpassword'];

if(!empty($email) || !empty($userpassword)){
    $encryptedpassword = md5($userpassword);
    $host = "localhost";
    $databaseUsername = "root";
    $databasePassword = "";
    $databasename = "studentmis";
 //create a connection to the data base
    $conn = new mysqli($host,$databaseUsername,$databasePassword,$databasename);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT = "SELECT email from logintable where email = ? Limit 1";   //note; code is from the phpsql database.
        $INSERT = "INSERT Into logintable(email, userpassword) values(?,?)";

    // prepare statement
        $stmt = $conn->prepare($SELECT);                
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rownum = $stmt->num_rows;
        if($rownum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$email,$encryptedpassword);
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