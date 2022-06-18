<?php 
include "conn.php";

session_start();


//Select request for login
if(isset($_POST["login"])){
    
    $login_email = $_POST["log_email"];
    $pass_login = $_POST["log_password"];

    $sql_select = "SELECT * from donor WHERE email = '$login_email' and password = '$pass_login'";
    $query_result = $conn->query($sql_select);
    $login_data = $query_result->fetch_assoc();

    // check if the number of rows returned by the query is above 0
    if($query_result->num_rows > 0){
        $_SESSION["id_donor"] = $login_data["CIN"];
        header("Location: homePage.php");
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
    <title>signin</title>
</head>
<body>
    <?php include '../nav.php' ?>
    <div class="signup_container">
        <div class="signinForm_div">
            <div class="">
                <h2>Log in</h2>
            </div>

                <form class='signin_inputs' method="POST" action="">

                    <div>
                        <input name="log_email" type="text" placeholder="Enter your email">   
                    </div>
                    <div>
                        <input name="log_password" type="text" placeholder="Password">   
                    </div>
 
                    <div class="signin_btn" >
                        <span>Don’t have an account yet ? <a href="signupPage.php">Sign up</a></span>
                        <input name="login" type="submit" value="Log in">
                    </div>
                </form>
        
        </div>

        <div class="signup_img">
            <img src="../images/Component _signin.png" alt="">
        </div>
    </div>
  
    <!-- footer -->
    <?php include "../footer.html" ?>
</body>
</html>