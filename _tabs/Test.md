---
layout: page
permalink: /test/
icon: fas fa-stream
---

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

    let response = await fetch('https://api.github.com/repos/YOUR_GITHUB_USERNAME/YOUR_REPO/actions/workflows/contact.yml/dispatches', {
        method: 'POST',
        headers: {
            'Authorization': 'Bearer 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',
            'Accept': 'application/vnd.github.v3+json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            ref: 'main',
            inputs: jsonData
        })
    });

    if (response.ok) {
        document.getElementById('response').innerText = "Message sent! You'll receive a confirmation email.";
    } else {
        document.getElementById('response').innerText = "Error sending message.";
    }
});
</script>
