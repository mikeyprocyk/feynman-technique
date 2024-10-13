<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Study Buddy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <section class="login-form">
        <h2>Log In</h2>
        <form action="includes/login.includes.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            <button type="submit" name="submit">Log In</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Please ensure you've filled in all fields.</p>";
                echo '<a href="signup.php"><p style="cursor: pointer;">Dont have an account? Click here</p></a>';
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Please choose a proper username.</p>";
                echo '<a href="signup.php"><p style="cursor: pointer;">Dont have an account? Click here</p></a>';
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information.</p>";
                echo '<a href="signup.php"><p style="cursor: pointer;">Dont have an account? Click here</p></a>';
            }
        }
        else{
            echo '<a href="signup.php"><p style="cursor: pointer;">Dont have an account? Click here</p></a>';
        }
    ?>
    </section>
</body>
</html>