<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Study Buddy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="top-div">
        <h3 style="padding-top: 10%; font-size: 12px; padding-left: 5%; color: var(--lightgrey);">
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "Hi " . $_SESSION["useruid"] . ",";
            } else {
                echo "You need to be signed in to use.";
            }
            ?>
        </h3>
            <h4>Let's see what I can do for you?</h4>
        </div>
        <div class="options--holder--main">
            <div class="options--holder--voice--option">
                <h6 id="small-text-top-left">Voice Helper</h6>
                <i class="fa-regular fa-comments" style="color: #fdfcf7; font-size: 38px; padding-left: 10%; padding-top: 10%;"></i>
                <h3 id="left-section-text">Let's learn something new using voice recording</h3>
                <?php 
                if (isset($_SESSION["useruid"])) {
                    echo '<a href="voicerecording.php"><button class="btn-start-recording" role="button">Start Recording</button></a>';
                } else {
                    echo '<a href="login.php"><button class="btn-start-recording" role="button">Start Recording</button></a>';
                } 
                ?>
            </div>
            <div class="options--holder--text--option">
                <i class="fa-regular fa-message" style="color: #fdfcf7; font-size: 20px; padding-left: 5%; padding-top: 5%;"></i>
                <h5 style="padding-left: 15%; padding-top: 10%;">Start New Chat</h5>
                <?php 
                if (isset($_SESSION["useruid"])) {
                    echo '<a href="chat.php"><i class="fa-regular fa-circle-right" style="color: #fdfcf7; font-size: 25px; padding-left: 80%; padding-top: 25%;"></i></a>';
                } else {
                    echo '<a href="login.php"><i class="fa-regular fa-circle-right" style="color: #fdfcf7; font-size: 25px; padding-left: 80%; padding-top: 25%;"></i></a>';
                } 
                ?>
            </div>
            <div class="options--holder--text--custom">
                <i class="fa-regular fa-pen-to-square" style="color: #fdfcf7; font-size: 20px; padding-left: 5%; padding-top: 5%;"></i>
                <h5 style="padding-left: 15%; padding-top: 10%;">Set your definitions</h5>
                <?php 
                if (isset($_SESSION["useruid"])) {
                    echo '<a href="#"><i class="fa-regular fa-circle-right" style="color: #fdfcf7; font-size: 25px; padding-left: 80%; padding-top: 10%;"></i></a>';
                } else {
                    echo '<a href="login.php"><i class="fa-regular fa-circle-right" style="color: #fdfcf7; font-size: 25px; padding-left: 80%; padding-top: 10%;"></i></a>';
                } 
                ?>
            </div>
        </div>
        <script src="https://kit.fontawesome.com/4820a3ee18.js" crossorigin="anonymous"></script>
        <script src="script.js" async defer></script>
    </body>
</html>