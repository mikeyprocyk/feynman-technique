<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Study Buddy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="signup.css">
    </head>
</head>
<body>
    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="includes/signup.includes.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdrepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Sign Up</button>
        </form>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput"){
                echo "<p>Please ensure you've filled in all fields.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';               
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Please choose a proper username.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Please choose a proper email.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';
            } else if ($_GET["error"] == "pwddontmatch") {
                echo "<p>Please ensure your passwords match.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username taken, please choose another username.</p>";
                echo '<a href="login.php"><p style="cursor: pointer;">Already have an account? Click here</p></a>';
            } else if ($_GET["error"] == "none") {
                echo "<p>You have successfully signed up!</p>";
                header("location: ../login.php");
                exit();
            }
        }
    ?>
    </section>
</body>
</html>