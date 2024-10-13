<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Study Buddy</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="chat.css">
</head>
<body>
    <h2>Start Chatting With Studdy Buddy AI</h2>
    <form id="textForm">
        <input type="text" id="input1" placeholder="Topic" required>
        <input type="text" id="input2" placeholder="Explanation" required>
        <!-- Submit Button -->
        <button type="submit" id="submitButton">Submit</button>
    </form>

    <!-- Area to Display Result -->
    <p id="aiOutput"></p>

    <div class="box" id="bot">
        This is a box!
    </div>

    <script src="chat.js" async defer></script>
</body>
</html>
