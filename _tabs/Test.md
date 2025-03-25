---
layout: page
permalink: /test/
icon: fas fa-stream
---

# Contact Form

Please fill out the form below to get in touch with us:

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

    const token = 'YOUR_GITHUB_PERSONAL_ACCESS_TOKEN';  // You must securely handle the token
    const repoOwner = 'YOUR_GITHUB_USERNAME';
    const repoName = 'YOUR_REPO';

    let response = await fetch(`https://api.github.com/repos/${repoOwner}/${repoName}/actions/workflows/contact.yml/dispatches`, {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Accept': 'application/vnd.github.v3+json',
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            ref: 'main',
            inputs: jsonData
        })
    });

    let responseText = await response.json();
    if (response.ok) {
        document.getElementById('response').innerText = "Message sent! You'll receive a confirmation email.";
    } else {
        document.getElementById('response').innerText = "Error sending message.";
    }
});
</script>

