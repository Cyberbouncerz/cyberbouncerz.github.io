---
layout: page
permalink: /test/
icon: fas fa-stream
---

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input, textarea, button { width: 100%; padding: 10px; margin: 5px 0; }
    </style>
</head>
<body>

<h2>Contact Form</h2>
<form id="contact-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send</button>
</form>

<p id="response"></p>

<script>
document.getElementById('contact-form').addEventListener('submit', async function(event) {
    event.preventDefault();

    let formData = {
        name: document.getElementById("name").value,
        email: document.getElementById("email").value,
        message: document.getElementById("message").value
    };

    let response = await fetch("https://script.google.com/macros/s/AKfycbxe_T1M2RXJ1hzJYaibAnm-ueIVqfV4cRCAmNDsxROvQDJYM7FBKjbmOTVg83I5i2BF/exec", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(formData)
    });

    let result = await response.json();
    if (result.status === "success") {
        document.getElementById("response").innerText = "Message sent! Your ticket number is " + result.ticketNumber;
    } else {
        document.getElementById("response").innerText = "Error: " + result.message;
    }
});
</script>

</body>
</html>
