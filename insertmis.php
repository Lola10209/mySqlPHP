<?php
$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
// $password = $_POST['password'];
$usertype = $_POST['usertype'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$surname = $_POST['surname'];
$dateofbirth = $_POST['dateofbirth'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stateoforigin = $_POST['stateoforigin']; 
$countryoforigin = $_POST['countryoforigin'];
$guardian = $_POST['guardian'];
$guardianphoneno = $_POST['guardianphoneno'];
$relationshipofguardian = $_POST['relationshipofguardian'];
$classenrolled = $_POST['classenrolled'];
$lastclassattended = $_POST['lastclassattended'];
$lastschoolattended = $_POST['lastschoolattended'];
$genotype = $_POST['genotype'];
$bloodgroup = $_POST['bloodgroup'];
$disability = $_POST['disability'];
$gender = $_POST['gender'];
$message = $_POST['message'];


if(!empty($username)||!empty($userpassword)||!empty($usertype)||!empty($firstname)||!empty($surname)||!empty($email)||!empty($phone)){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentmis";

    $conn = new mysqli($host, $username, $password, $dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }else{
        $SELECT = "SELECT email from studentregistration where email = ? Limit 1"; 
        $INSERT = "INSERT INTO studentregistration(username, userpassword, usertype, firstname, middlename, surname, dateofbirth, address, email, phone, 
        stateoforigin, countryoforigin, guardian, guardianphoneno, relationshipofguardian, classenrolled, lastclassattended, lastschoolattended, 
        genotype, bloodgroup, disability, gender, message) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    // prepare statement
        $stmt = $conn->prepare($SELECT);                
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rownum = $stmt->num_rows;
        if($rownum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssssssssssssssssssssss",$username, $userpassword, $usertype, $firstname, $middlename, $surname, $dateofbirth, $address, $email, $phone, 
            $stateoforigin, $countryoforigin, $guardian, $guardianphoneno, $relationshipofguardian, $classenrolled, $lastclassattended, $lastschoolattended, $genotype,
            $bloodgroup, $disability, $gender, $message);
            $stmt->execute();
            echo "new record inserted successfully"; //use javascript to display your result

        }else{
            echo "This email already exists on our record";
            $stmt->close();
            $conn->close();
        }
    }
}else{
    echo "All fields are required";
    die();
}


//=========================================================================================================================================================================================

$username = $_POST['username'];
$userpassword = $_POST['userpassword'];
// $password = $_POST['password'];
$usertype = $_POST['usertype'];

if(!empty($username)||!empty($userpassword)||!empty($usertype)){
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentmis";

    $conn = new mysqli($host, $username, $password, $dbname);
    if(mysqli_connect_error()){
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }else{
        $SELECT = "SELECT username from usertable where username = ? Limit 1"; 
        $INSERT = "INSERT INTO usertable(username, userpassword, usertype) values(?,?,?)";
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
            $stmt->bind_param("sss",$username, $userpassword, $usertype);
            $stmt->execute();
            echo "new record inserted successfully"; //use javascript to display your result

        }else{
            echo "This username already exists on our record";
            $stmt->close();
            $conn->close();
        }
    }
}else{
    echo "All fields are required";
    die();
}