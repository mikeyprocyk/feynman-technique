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
        <form id="textForm" method="post">
            <input type="text" id="input1" name="topic" placeholder="Topic" required>
            <input type="text" id="input2" name="explanation" placeholder="Explanation" required>
            <button type="submit" id="submitButton">Submit</button>
        </form>
        
        <p id="aiOutput">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the topic and explanation from the form
                $topic = htmlspecialchars($_POST['topic']);
                $explanation = htmlspecialchars($_POST['explanation']);

                // Execute the Python script to capture text input and interact with the chatbot
                $command = escapeshellcmd("python3 chatbot.py text"); // Make sure the mode is 'text'
                $output = shell_exec($command);  // Captures the chatbot's response

                // Display the chatbot's response
                echo "Chatbot: " . htmlspecialchars($output);
            }
            ?>
        </p>

        <div class="box" id="bot">
            This is a box!
        </div>
    </section>

    <script src="chat.js" async defer></script>
</body>
</html>
