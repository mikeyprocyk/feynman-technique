<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Buddy</title>
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
            } else if ($_GET["error"] == "invaliduid") {
                echo "<p>Please choose a proper username.</p>";
            } else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information.</p>";
            }
        }
    ?>
    </section>
</body>
</html>