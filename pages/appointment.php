<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <title>Appointment</title>
</head>

<body>
    <?php include '../nav.php' ?>

    <main class="apointment_main">
        <div id="appointment_steps">
            <div> <img class="eligiDate_drop" src="../images/red_drop1.png" alt=""> <span>Check eligibility</span></div>
            <div> <img id="middle_arrow_img" src="../images/drops_arrow.png" alt=""></div>
            <div> <img class="eligiDate_drop" src="../images/gray_drop2.png" alt=""> <span>Select date </span></div>
        </div>

        <div id="test_container"> 
            <div>
                <div id="eligibility_parag">
                    <p>To protect the people who receive donated blood and the donors who give it, we ask questions before you can donate.
                        Answer a few quick questions to find out if you're eligible to make an appointment.</p>
                    <span>Please select at least one option</span>
                </div>

                    <div id="options_conatainer">
                        <div>
                            <input class="test_option" name="op1" type="checkbox"><label for="op1">Having or had a coronavirus vaccination?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op2" type="checkbox"><label for="op2">Have you been unwell in any way lately?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op3" type="checkbox"><label for="op3">Do you weigh less than 50kg?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op4" type="checkbox"><label for="op4">Do you have a serious heart condition, or have you ever had a heart attack or stroke?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op5" type="checkbox"><label for="op5">In the last 3 months, have you engaged in at-risk sexual behaviour?</label>
                        </div>
                        <div>
                            <input  class="test_option" name="op6" type="checkbox"><label for="op6">Have you had an operation or surgical procedure in the last 6 months, or are you planning on any in the 3 months after your donation?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op7" type="checkbox"><label for="op7">Are you pregnant, or have you been pregnant in the last 9 months?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op8" type="checkbox"><label for="op8">Are you taking antibiotics?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op9" type="checkbox"><label for="op9">Have you (or will you have) any dental work in the week before your donation?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op10" type="checkbox"><label for="op10">Have you had a tattoo in the 4 months before your donation?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op11" type="checkbox"><label for="op11">Have you had a piercing in the 4 months before your donation?</label>
                        </div>
                        <div>
                            <input class="test_option" name="op12" type="checkbox"><label for="op12">Have you been outside of Morocco in the 4 months before your donation?</label>
                        </div>

                </div>
                
                <div id="test_btns_div">
                        <button id="reset_btn">RESET</button>
                        <button id="continue_btn">CONTINUE</button>
                </div>

            </div>
        </div>
    </main>

    <div id="popup_container">
        <div id="popup_div">
            <img src="../images/warning.png" alt="">
            <p>Thank you for wanting to make a life-saving blood donation.
            We suggest that you check your health condition in the nearest hospital</p>
            <button id="popup_btn"> <a href="homePage.php">GO HOME</a></button>
            <img id="popup_clear" src="../images/clear.png" alt="">
        </div>
    </div>

    <?php include "../footer.html" ?>
<script src="../script.js"></script>
</body>

</html>