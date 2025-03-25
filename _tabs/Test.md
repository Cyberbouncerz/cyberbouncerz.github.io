---
layout: page
permalink: /test/
icon: fas fa-stream
---

# Contact Form

<form id="contact-form" method="POST">
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

    let formData = new FormData(this);
    let jsonData = {};
    formData.forEach((value, key) => jsonData[key] = value);

    let response = await fetch('https://api.github.com/repos/cyberbouncerz/contact-form-submit/dispatches', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer YOUR_GITHUB_PAT',  // Replace this with your stored GitHub Token
            'Accept': 'application/vnd.github.v3+json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            event_type: "contact-form-submission",
            client_payload: jsonData
        })
    });

    if (response.ok) {
        document.getElementById('response').innerText = "Message sent! You'll receive a confirmation email.";
    } else {
        let errorText = await response.text();
        document.getElementById('response').innerText = "Error sending message: " + errorText;
    }
});
</script>
