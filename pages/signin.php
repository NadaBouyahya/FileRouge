<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <title>signin</title>
</head>
<body>
    <?php include '../nav.html' ?>
    <div class="signup_container">
        <div class="signinForm_div">
            <div class="">
                <h2>Log in</h2>
            </div>

                <form class='signin_inputs' action="">

                    <div>
                        <input name="log_email" type="text" placeholder="Enter your email">   
                    </div>
                    <div>
                        <input name="log_password" type="text" placeholder="Password">   
                    </div>
 
                    <div class="signin_btn" >
                        <span>Don’t have an account yet ? <a href="signupPage.php">Sign up</a></span>
                        <input type="submit" value="Log in">
                    </div>
                </form>
        
        </div>

        <div class="signup_img">
            <img src="../images/Component _signin.png" alt="">
        </div>
    </div>
</body>
</html>