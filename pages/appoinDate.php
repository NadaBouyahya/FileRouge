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
<?php include 'conn.php' ?>
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

    <div id="date_container">
        <div id="date_calendar">
            <div>
            <?php 
                $sql_date = "SELECT COUNT(*) AS date_count, appoin_date FROM `appointment` group by appoin_date;";
                $date_res = $conn->query($sql_date);

                $today = strtotime("today");
                $end_day = strtotime('+3 weeks', $today);

                while($today < $end_day){
                    $day = date("Y-m-d", $today);
                    $appointments_count = 0;

                    while($row = $date_res->fetch_assoc()){
                        if($row["appoin_date"] == $day){
                            $appointments_count = $row["date_count"];
                            echo "<a>". $day . " " . $appointments_count . "  </a>";
                            continue;
                        }
                    }
                    if($appointments_count == 0){
                        echo "<a>". $day . " </a>";
                    }
                    // echo "<a>". date("M d", $today). "</a>";
                    $today = strtotime('+1 day', $today);
                }
            ?>
            </div>
        </div>
    </div>


    <?php include "../footer.html" ?>
</body>
</html>