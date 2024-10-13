<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studdy Buddy</title>
    <link rel="stylesheet" href="VRecording.css">
    <script src="https://kit.fontawesome.com/4820a3ee18.js" crossorigin="anonymous"></script>
    <script src="https://pyscript.net/latest/pyscript.js"></script>
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
        $command = escapeshellcmd('python3 chatbot.py');
        $output = shell_exec($command);

        echo"<p>".htmlspecialchars($output). "</p>";
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
