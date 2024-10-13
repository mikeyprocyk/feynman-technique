document.getElementById('textForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the traditional way

    // Get values from the input fields
    var text1 = document.getElementById("input1").value;
    var text2 = document.getElementById("input2").value;

    // Combine the text and display it
    if (text1 && text2) {
        // Show the box when the form is submitted
        var div = document.getElementById('bot');
        div.style.display = 'block'; // Show the div
    } else {
        document.getElementById("aiOutput").textContent = "Please enter both texts.";
    }
});
