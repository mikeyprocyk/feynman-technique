<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Study Buddy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="definitons.css">
</head>
<body>
    <section class="chat-form">
        <h2>Start Chatting With Study Buddy AI</h2>
        <form id="textForm">
            <input type="text" id="input1" placeholder="Topic" required>
            <input type="text" id="input2" placeholder="Definitions" required>
            <button type="submit" id="submitButton">Submit</button>
        </form>
        
        <p id="aiOutput"></p>

        <div class="box" id="bot">
            This is a box!
        </div>
    </section>

    <script src="definitions.js" async defer></script>
</body>
</html>
