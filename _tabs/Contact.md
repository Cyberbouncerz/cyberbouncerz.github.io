---
layout: page
permalink: /contact/
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background-image: url('https://source.unsplash.com/1600x900/?waterfall'); /* Replace with your waterfall image URL */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0; /* Remove default body padding */
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure full viewport height */
        }
        .container {
            max-width: 600px;
            margin: 40px auto; /* Adjust top margin and center */
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 30px;
        }
        label {
            display: block;
            margin: 20px 0 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: border-color 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #response {
            display: none;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }
        .thank-you {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }
        footer {
            text-align: center;
            margin-top: auto; /* Push footer to bottom */
            padding: 20px 0;
            background: rgba(255, 255, 255, 0.8);
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>
        <form id="contactForm" action="https://formspree.io/f/xpwavqzy" method="POST">
            <label for="firstName">First Name</label>
            <input type="text" id="firstName" name="firstName" required>

            <label for="lastName">Last Name</label>
            <input type="text" id="lastName" name="lastName">

            <label for="email">Your Email (required)</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message (please avoid sharing sensitive health information. For sensitive inquiries, kindly email us directly.)</label>
            <textarea id="message" name="message" rows="8" required></textarea>

            <button type="submit">Submit</button>
        </form>
        <div id="response" class="thank-you"></div>
    </div>

    <footer>
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </footer>

    <script>
        const form = document.getElementById('contactForm');
        const responseDiv = document.getElementById('response');
        const emailInput = document.getElementById('email');
        const submitButton = document.querySelector('button[type="submit"]');

        form.onsubmit = function(event) {
            event.preventDefault();

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(emailInput.value)) {
                responseDiv.innerText = 'Please enter a valid email address.';
                responseDiv.style.display = 'block';
                return;
            }

            submitButton.disabled = true;
            submitButton.innerText = "Submitting...";

            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    responseDiv.innerText = 'Thank you for reaching out to us! We will get back to you as soon as possible.';
                    responseDiv.style.display = 'block';
                    form.reset();
                } else {
                    responseDiv.innerText = 'There was a problem sending your message.';
                    responseDiv.style.display = 'block';
                }
            })
            .catch(error => {
                responseDiv.innerText = 'There was a problem sending your message.';
                responseDiv.style.display = 'block';
            })
            .finally(() => {
                submitButton.disabled = false;
                submitButton.innerText = "Submit";
            });
        };
    </script>
</body>
</html>
