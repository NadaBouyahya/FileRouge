<?php 
include "conn.php";
?>
<?php
// form validation
if (isset($_POST["signup"])){
    $error = false;

    $firstName = $_POST["fname"];
    $err_fname = "";

    $lastName = $_POST["lname"];
    $err_lname = "";
    
    $email = $_POST["email_address"];
    $err_email = "";

    $Password = $_POST["pass"];
    $err_pass = "";

    $passConfirm = $_POST["pass_confirm"];
    $err_pass_confirm = "";

    $phone = $_POST["phone"];
    $err_phone = "";

    $cin = $_POST["cin"];
    $err_cin = "";

    $address = $_POST["address"];
    $err_address = "";

    $birth = $_POST["birth"];
    $err_birth = "";

    $gender = $_POST["gender"];
    $err_gender = "";

    $bloodType = $_POST["blood_type"];
    $err_blood_type = "";

    // form validation
    if(!preg_match('/[a-zA-Z]{3,20}/', $firstName)) {
        $err_fname = "first name must be 3 or more characters";
        $error = true;
    }
    if(!preg_match('/[a-zA-Z]{3,20}/', $lastName)) {
        $err_lname = "last name must be 3 or more characters";
        $error = true;
    }
    if(!preg_match('/([a-zA-Z0-9]{4,})@gmail\.com/', $email)) {
        $err_email = "invalid email format";
        $error = true;
    }
    if(!preg_match('/[a-zA-Z0-9]{8,}/', $Password)) {
        $err_pass = "password must be 8 or more characters";
        $error = true;
    }
    if($passConfirm != $Password) {
        $err_pass_confirm = "doesn't match the password!";
        $error = true;
    }
    if(!preg_match('/(06)[0-9]{8}/', $phone)) {
        $err_phone = "invalid phone number";
        $error = true;
    }
    if(!preg_match('/[A-Z]{2}[0-9]{6}/', $cin)) {
        $err_cin = "invalid CIN";
        $error = true;
    }
    if(strlen($address)<5) {
        $err_address = "please enter a valid address";
        $error = true;
    }
    if($birth == "") {
        $err_birth = "please enter your birth date";
        $error = true;
    }
    if($gender == "") {
        $err_gender = "please select a gender";
        $error = true;
    }
    if($bloodType == "") {
        $err_blood_type = "please select your blood type";
        $error = true;
    }

    // INSERT into database: table donor
    if($error == false) {
        $sql_request = "INSERT INTO donor VALUES('$cin', '$firstName', '$lastName', '$email', '$Password', '$gender', '$address', '$birth', '$phone', $bloodType)";
        $conn->query($sql_request);
        header("Location:signin.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <style>
        footer{
            transform: translate(0, 100%);
        }
    </style>
    <title>signup</title>
</head>
<body>
    <?php include '../nav.php' ?>
    <div class="signup_container">
        <div class="signupForm_div">

            <div class="form_titles">
                <h2>Welcome to SAVE</h2>
                <p>Let’s set you up so you can donate your blood</p>
                <p>Already have an account ? <a href="signin.php">Log in</a></p>
            </div>

                <form method="POST" class='signup_inputs' action="">
                    
                    <div>
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" required>
                        <span><?php if(isset($_POST["signup"])){echo $err_fname;} ?></span> 
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" required>  
                        <span><?php if(isset($_POST["signup"])){echo $err_lname;} ?></span>  
                    </div>
                    <div>
                        <label for="email_address">Email</label>
                        <input type="text" name="email_address" required> 
                        <span><?php if(isset($_POST["signup"])){echo $err_email;} ?></span>   
                    </div>
                    <div>
                        <label for="pass">Password</label>
                        <input type="password" name="pass" required> 
                        <span><?php if(isset($_POST["signup"])){echo $err_pass;} ?></span>   
                    </div>
                    <div>
                        <label for="pass_confirm">Password confirmation</label>
                        <input type="password" name="pass_confirm" required>  
                        <span><?php if(isset($_POST["signup"])){echo $err_pass_confirm;} ?></span>  
                    </div>
                    <div>
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone" required>  
                        <span><?php if(isset($_POST["signup"])){echo $err_phone;} ?></span>  
                    </div>
                    <div>
                        <label for="cin">CIN</label>
                        <input type="text" name="cin"> 
                        <span><?php if(isset($_POST["signup"])){echo $err_cin;} ?></span>   
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <input type="text" name="address"> 
                        <span><?php if(isset($_POST["signup"])){echo $err_address;} ?></span>   
                    </div>
                    <div>
                        <label for="birth">Birth date</label>
                        <input type="date" name="birth"> 
                        <span><?php if(isset($_POST["signup"])){echo $err_birth;} ?></span>   
                    </div>
                    <div>
                        <select name="gender">
                            <option selected disabled hidden value>-- Select your gender --</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span><?php if(isset($_POST["signup"])){echo $err_gender;} ?></span> 
                    </div>
                    <div>
                        <select name="blood_type">
                            <option selected disabled hidden value>-- Select your blood type --</option>
                            <?php
                             $sql_options = "SELECT * FROM blood_type";
                            $type_options = $conn->query($sql_options); 
                            

                            while($row = $type_options->fetch_assoc()){
                                echo '
                                    <option value="'.$row["ID_type"].'">'.$row["Type"].'</option>
                                ';
                            }
                            ?>
                            <!-- <option value="1">A-</option>
                            <option value="2">A+</option>
                            <option value="3">B-</option>
                            <option value="4">B+</option>
                            <option value="5">O-</option>
                            <option value="6">O+</option>
                            <option value="7">AB+</option>
                            <option value="8">AB-</option> -->
                        </select>
                        <span><?php if(isset($_POST["signup"])){echo $err_blood_type;} ?></span> 
                    </div>
                    <div class="signup_btn" >
                        <input type="submit" value="SIGN UP" name="signup">
                    </div>
                </form>
        
        </div>

        <div class="signup_img">
            <img src="../images/component.png" alt="">
        </div>
    </div>
    
    <!-- footer -->
    <?php include '../footer.html' ?>
</body>
</html>