<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Study Buddy</title>
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
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Please choose a proper username.</p>";
            } else if ($_GET["error"] == "invalidemail") {
                echo "<p>Please choose a proper email.</p>";
            } else if ($_GET["error"] == "pwddontmatch") {
                echo "<p>Please ensure your passwords match.</p>";
            } else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong, try again.</p>";
            } else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username taken, please choose another username.</p>";
            } else if ($_GET["error"] == "none") {
                echo "<p>You have successfully signed up!</p>";
                header("location: ../feynman-technique/login.php");
                exit();
            }
        }
    ?>
    </section>
</body>
</html>