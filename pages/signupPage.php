<?php 
include "conn.php";

if (isset($_POST["signup"])){
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

    if($firstName=="" || strlen($firstName)<3) {
        $err_fname = "firs tname must be 5 or more characters";
    }
    if($lastName=="" || strlen($lastName)<3) {
        $err_lname = "last name must be 5 or more characters";
    }
    if($email=="" || strlen($email)<5) {
        $err_email = "invalid email format";
    }
    if($Password=="" || strlen($Password)<8) {
        $err_pass = "password must be 8 or more characters";
    }
    if($passConfirm != $Password) {
        $err_pass_confirm = "doesn't match the password!";
    }
    if($phone=="" || strlen($phone)<10) {
        $err_phone = "last name must be 10 or more characters";
    }
    if($cin=="" || strlen($cin)<5) {
        $err_cin = "please enter a valid lastname";
    }
    if($address=="" || strlen($address)<5) {
        $err_address = "please enter a valid lastname";
    }
    if($birth=="" || strlen($birth)<5) {
        $err_birth = "please enter a valid lastname";
    }
    if($gender=="" || strlen($gender)<5) {
        $err_gender = "please enter a valid lastname";
    }
    if($blood_type=="" || strlen($blood_type)<5) {
        $err_blood_type = "please enter a valid lastname";
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
    <title>signup</title>
</head>
<body>
    <?php include '../nav.html' ?>
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
                        <input type="text" name="fname">  
                        <span><?php if(isset($_POST["signup"])){echo $err_fname;} ?></span> 
                    </div>
                    <div>
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname">  
                        <span><?php if(isset($_POST["signup"])){echo $err_lname;} ?></span>  
                    </div>
                    <div>
                        <label for="email_address">Email</label>
                        <input type="text" name="email_address"> 
                        <span><?php if(isset($_POST["signup"])){echo $err_email;} ?></span>   
                    </div>
                    <div>
                        <label for="pass">Password</label>
                        <input type="password" name="pass"> 
                        <span><?php if(isset($_POST["signup"])){echo $err_pass;} ?></span>   
                    </div>
                    <div>
                        <label for="pass_confirm">Password confirmation</label>
                        <input type="password" name="pass_confirm">  
                        <span><?php if(isset($_POST["signup"])){echo $err_pass_confirm;} ?></span>  
                    </div>
                    <div>
                        <label for="phone">Phone number</label>
                        <input type="text" name="phone">  
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
                            <option>A-</option>
                            <option>B-</option>
                            <option>A+</option>
                            <option>B+</option>
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