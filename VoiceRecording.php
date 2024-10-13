<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Buddy</title>
    <link rel="stylesheet" href="VRecording.css">
    <script src="https://kit.fontawesome.com/4820a3ee18.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="main-container">
        <div style="display: flex;">
            <i class="fa-regular fa-circle-left" style="color: white; font-size: 25px; cursor: pointer; padding-right: 15px; padding-top: 5px;" onclick="goBack()"></i>
            <h2>Speaking to AI Bot</h2>
        </div>
        <div id="sphere"></div>
    </section>
    <div class="ai-text-section">
        <?php
        // Execute the Python script to capture microphone input and interact with the chatbot
        $command = escapeshellcmd("python3 chatbot.py microphone"); // Make sure the mode is 'microphone'
        $output = shell_exec($command);  // Captures the chatbot's response

        // Display the chatbot's response
        echo "<p>" . htmlspecialchars($output) . "</p>";
        ?>
    </div>
    <script src="VoiceR.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
