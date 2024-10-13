<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Study Buddy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="chat.css">
</head>
<body>
    <section class="chat-form">
        <h2>Start Chatting With Study Buddy AI</h2>
        <form id="textForm">
            <input type="text" id="input1" placeholder="Topic" required>
            <input type="text" id="input2" placeholder="Explanation" required>
            <button type="submit" name="runPython" id="submitButton">Submit</button>
        </form>
        
        <p id="aiOutput"></p>

        <div class="box" id="bot">
            <?php
                if (isset($_POST['runPython'])){
                    $output = shell_exec('python3 chatbot.py');
                    echo "<pre>$output</pre>";
                }
            ?>
        </div>
    </section>

    <script src="chat.js" async defer></script>
</body>
</html>
