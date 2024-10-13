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
    <i class="fa-regular fa-circle-left" style="color: white; font-size: 25px; cursor: pointer; padding-right: 15px; padding-top: 5px;" onclick="goBack()"></i>
        <h2>Start Chatting With Study Buddy AI</h2>
        <form id="textForm">
            <input type="text" id="input1" placeholder="Topic" required>
            <input type="text" id="input2" placeholder="Explanation" required>
            <button type="submit" id="submitButton">Submit</button>
        </form>
        
        <p id="aiOutput"></p>

        <div class="box" id="bot">
            This is a box!
        </div>
    </section>

    <script src="chat.js" async defer></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
