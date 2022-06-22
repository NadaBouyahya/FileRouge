<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.Css">
    <title>home</title>
</head>

<body>
<?php include '../nav.php' ?> 
    <!-- header  -->
    <header>
        <div>
            <img src="../images/header_banner.jpg" alt="">
            <div class="header_text">
                <div>
                    <h2>Every blood drop is a life gift</h2>
                    <p>Every day thousands of people’s lives are saved or improved thanks to the generosity of donors like you. But, sadly, there are still lots of patients we can’t treat because we don’t have enough supplies. There’s an urgent need for donations. Please help, if you can.</p>
                    
                    <?php if(!isset($_SESSION["id_donor"]) || $_SESSION["id_donor"]=="") {?>
                        <a class="header_button" href="signin.php">Donate now</a>
                    <?php } else { ?>
                        <a class="header_button" href="appoinTest.php">Donate now</a>
                    <?php } ?>

                </div>
            </div>
        </div>
        
    </header>
    <main>
        <!-- how to donate section -->
        <section class="first_section">
                <div class="how_to_donate">
                    <h1>How to donate</h1>
                    <div>
                        <div class="donate_divs">
                            <img class ="donate_icons" src="../images/add.png" alt="">
                            <p> Sign up and make your appointment </p>
                        </div>
                        <div id="centred_donate_icon" class="donate_divs">
                            <img class ="donate_icons" src="../images/email.png" alt="">
                            <p>Receive an email with your appointment informations</p>
                        </div>
                        <div class="donate_divs">
                            <img class ="donate_icons" src="../images/location.png" alt="">
                            <p>Head to our hospital and help to save a life</p>
                        </div>
                    </div>
                </div>
        </section>

        <!-- about us section -->
        <section id="aboutUs" class="second_section">
            <div class="about_div">
                <h1>About us</h1>
                <div class="about_content">
                    <img src="../images/about_us.jpg" alt="">
                    <p>SAVE has been created  to provide an accessible and easy appointment process, in order to encourage you to donate your blood, and save a life. From what is donation to what it is used for, we explain the details for you, you can register now by choosing a suitable day for you, and visit our hospital from 8 am to 5 pm. </p>
                </div>
            </div>
        </section>

        <!-- whole blood section -->
        <section class="last_section">
            <h1>whole blood donation</h1>
            <div class="lastSection_container">
                <div class="lastSection_div">
                    <div>
                        <span>What is it?</span>
                        <p>Blood Collected straight from the donor after its donation usually separated into red blood cells, platelets, and plasma.</p>
                    </div>
                    <div>
                        <span>Who can donate?</span>
                        <p>You need to be 18-65 years old, weigh 45kg or more and be fit and healthy.</p>
                    </div>
                </div>

                <div class="lastSection_div">
                    <div>
                        <span>User For?</span>
                        <p>Stomach disease, kidney disease, childbirth, operations, blood loss, trauma, cancer, blood diseases, haemophilia, anemia, heart disease.</p>
                    </div>
                    <div>
                        <span>Lasts For?</span>
                        <p>Red cells can be stored for 42 days.</p>
                    </div>
                </div>

                <div class="lastSection_div">
                    <div>
                        <span>How long does it take?</span>
                        <p>15 minutes to donate.</p>
                    </div>
                    <div>
                        <span>How often can I donate?</span>
                        <p>Every 12 weeks</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include "../footer.html" ?>
</body>

</html>

