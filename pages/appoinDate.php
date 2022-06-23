<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <title>Document</title>
</head>
<body style="height: 105vh;">
<?php include 'conn.php' ?>
<?php include '../nav.php' ?>
    <div>

        <div id="appointment_steps">
                <div> <img class="eligiDate_drop" src="../images/gray_drop1.png" alt=""> <span>Check eligibility</span></div>
                <div> <img id="middle_arrow_img" src="../images/drops_arrow.png" alt=""></div>
                <div> <img class="eligiDate_drop" src="../images/red_drop2.png" alt=""> <span>Select date </span></div>
        </div>


    </div>
    

    <div id="date_container " style="margin-top:-100px;  margin-left:17em;">
        <div style="padding:50px 0px 0px 0px; " id="date_calendar">
            <div>
            <?php 
                $sql_date = "SELECT COUNT(*) AS date_count, appoin_date FROM `appointment` group by appoin_date;";
                $date_res = $conn->query($sql_date);

                $rows = array();

                while($row = $date_res->fetch_assoc()){
                    $rows[] = $row;
                }

                $today = strtotime("today");
                $end_day = strtotime('+6 weeks', $today);

                while($today < $end_day){
                    $day = date("Y-m-d", $today);
                    $appointments_count = 0;

                    for ($i=0; $i < count($rows); $i++) { 
                        if($rows[$i]["appoin_date"] == $day){
                            $appointments_count = $rows[$i]["date_count"];

                            if($rows[$i]["date_count"]<10){
                                echo "<a href='appoinMake.php?date=$day'> $day ". 10-$appointments_count ."<span> Available </span></a>";
                            }
                        }
                    }

                    // while($row = $date_res->fetch_assoc()){
                    //     if($row["appoin_date"] == $day){
                    //         $appointments_count = $row["date_count"];
                    //         echo "<a>". $day . " " . $appointments_count . "  </a>";
                    //         continue;
                    //     }
                    // }

                    if($appointments_count == 0){
                        echo "<a href='appoinMake.php?date=$day'>$day ". 10 - $appointments_count  . "<span> Available </span> </a>";
                    }

                    if($appointments_count >= 10){
                        echo "<a>". $day . "<span style='color:red;'> Unavailable </span> </a>";
                    }
                    // echo "<a>". date("M d", $today). "</a>";
                    $today = strtotime('+1 day', $today);
                }
            ?>
            </div>
        </div>
    </div>
<br><br><br>

    <?php  include "../footer.html" ?>
</body>
</html>