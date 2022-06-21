<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } ?>


<nav>
        <div>
            <div class="Logo_container">
                <img src="s.png" alt="">
                <img src="s.png" alt="">
            </div>

            <div class="nav_center">
                <ul>
                    <li><a href="homePage.php">Home</a></li>
                    
                    <?php if(!isset($_SESSION["id_donor"]) || $_SESSION["id_donor"]=="") {?>
                        <li><a href="signin.php">Donate now</a></li>
                    <?php } else { ?>
                        <li><a href="appointment.php">Donate now</a></li>
                        <?php } ?>

                    <li><a href="#">About us</a></li>
                </ul>
            </div>
            <div class="nav_left">
                <a href="#">
                    <a href="signin.php"> <img class="login_icon" src="../images/user.png" alt=""></a>
                    
                <!-- if the session is empty, print Login
                    else print Log out -->
                    <?php if(!isset($_SESSION["id_donor"]) || $_SESSION["id_donor"]==""){ ?>
                        <span><a href="signin.php">Login</a></span>
                    <?php } else{ ?>
                        <span><a href="logout.php">Log out</a></span>
                    <?php } ?>
                </a>
            </div>
        </div>
    </nav>