<?php
include_once 'sidebar.php';
?>

<!-- Location of HTML -->
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
        <?php
            if (isset($_SESSION["userid"])) {
            ?>
                <h2><?php echo $_SESSION["useruid"]; ?></h2>
            <?php
            } else {
            ?>
                <h2>Username</h2>
            <?php
            }
            ?>
            
        <script src="script.js" async defer></script>
    </body>
</html>