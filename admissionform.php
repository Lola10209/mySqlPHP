<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "link/mybootstrap.min.css">
    <link rel = "stylesheet" href = "link/mybootstrap-theme.min.css">
    <script src = "link/mybootstrap.min.js"></script>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
<form action="login.php" method="POST">
    <!-- <form action="http://localhost/mysqlphplessons/index2.php" method="POST"> -->
    <center>
        <h1 class="adm_form_text">Admission Form</h1>
    </center>
    <div align-center class = "admission_form">
            <div>
                <label class ="label_text" for = "username">Username</label>
                <input class = "input_style" type="text" name="username" required>
                <!-- <label class = "label_text" for="password">Password</label>
                <input class = "input_style" type="password"  name="password" required> -->
                <label class = "label_text" for="userpassword">Userpassword</label>
                <input class = "input_style" type ="password" name="userpassword" required>
                
                
                <label class = "label_text" for="usertype">User</label>
                <input class = "input_style" type = "text" name="usertype" value="student"  required>
                
                
            </div>
            <div>
                <label class = "label_text" for="firstname">Firstname</label>
                <input class = "input_style" type = "text" name="firstname" required>
                <label class = "label_text" for="middlename">Middlename</label>
                 <input class = "input_style" type = "text" name="middlename" >
                <label class = "label_text" for="surname">Surname</label>
                <input class = "input_style" type = "text" name="surname" required>
            </div>
            <div>
                <label class = "label_text" for="dateofbirth">Date Of Birth</label>
                <input class = "input_style" type = "text" name="dateofbirth" required>
                <label class = "label_text" for="address">Address</label>
                <input class = "input_style" type = "text" name="address" required>
                <label class = "label_text" for="email">Email</label>
                <input class = "input_style" type = "email" name="email" required> 
            </div>
            
            <div>
                <label class = "label_text" for="phone">Phone Number</label>
                <input class = "input_style" type = "text" name="phone" required>
                <label class = "label_text" for="stateoforigin">State Of Origin</label>
                <input class = "input_style" type = "text" name="stateoforigin" required>
                <label class = "label_text" for="countryoforigin">Country Of Origin</label>
                <input class = "input_style" type = "text" name="countryoforigin" required>
            </div>
            <div>
                <label class = "label_text" for="guardian">Guardian</label>
                <input class = "input_style" type = "text" name="guardian" required>
                <label class = "label_text" for="guardian phone no">Guardian Phone No</label>
                <input class = "input_style" type = "text" name="guardianphoneno" required>
                <label class = "label_text" for="relationshipofguardian">Relationship of Guardian</label>
                <input class = "input_style" type = "text" name="relationshipofguardian" required> 
            </div>
            <div>
                <label class = "label_text" for="classenrolled">class Enrolled</label>
                <input class = "input_style" type = "text" name="classenrolled" required>
                <label class = "label_text" for="last class attended">Last Class Attended</label>
                <input class = "input_style" type = "text" name="lastclassattended" required>
                <label class = "label_text" for="last school attended">Last School Attended</label>
                <input class = "input_style" type = "text" name="lastschoolattended" required>
            </div>
            <div>
                <label class = "label_text" for="genotype">Genotype</label>
                <input class = "input_style" type = "text" name="genotype" required>
                <label class = "label_text" for="bloodgroup">Blood Group</label>
                <input class = "input_style" type = "text" name="bloodgroup" required>
                <label class = "label_text" for="disability">Disability</label>
                <input class = "input_style" type = "text" name="disability" required>
            </div>
            <div class = gender_info>
                <label for = "male">Male</label>
                <input type = "radio" name="gender" id="male" name="male" value="male">
                <label for = "female">Female</label>
                <input type = "radio" name="gender" id="female" name="female" value="female">
                <label for = "others">Others</label>
                <input type = "radio" name="gender" id="others" name="others" value="others">
            </div>
            <div class= "mytextarea">
                <label class= label_text for="message">message</label>
                <textarea class= "textarea_style" name="message" id="message"></textarea>
            </div>
            <div>
                <input class= "btn btn-primary" type="submit" id="submit" value="Apply">
            </div>
        </form>
        <footer class= "footer_text">
            <h3>&copy; All @Copyright reseved by systems college</h3>
            <!--<h3>&#169; All @Copyright reseved by systems college</h3>-->
            
        </footer>
    </div>
</body>
</html>