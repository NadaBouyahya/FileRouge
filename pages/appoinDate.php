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
    <?php include '../nav.php' ?>
    <div>

        <div id="appointment_steps">
                <div> <img class="eligiDate_drop" src="../images/gray_drop1.png" alt=""> <span>Check eligibility</span></div>
                <div> <img id="middle_arrow_img" src="../images/drops_arrow.png" alt=""></div>
                <div> <img class="eligiDate_drop" src="../images/red_drop2.png" alt=""> <span>Select date </span></div>
        </div>

        <div id="date_btns_div">
                <button id="reset_btn">RESET</button>
                <button id="continue_btn">CONTINUE</button>
        </div>

    </div>

    <?php include "../footer.html" ?>
</body>
</html>