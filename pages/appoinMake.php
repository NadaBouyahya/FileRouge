<?php 
    include "conn.php";
    session_start();

    $appointment_day = $_GET["date"];
    $donor_id = $_SESSION["id_donor"];
    
    $sql_date_insert = "INSERT INTO appointment (`appoin_date`, `Donor_CIN`) VALUES ('$appointment_day', '$donor_id')";
    $conn->query($sql_date_insert);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <title>Document</title>
</head>
<body>
    <div id="done_container">   
        <div id="appointment_done">
            <img src="../images/mail.png" alt="">
            <span>THANK YOU ! </span>
            <p>We just sent you an email with your appointment’s information, check your inbox.</p>
            <button id="done_btn"> <a href="homePage.php">GO HOME</a></button>
        </div>
    </div>
</body>
</html>