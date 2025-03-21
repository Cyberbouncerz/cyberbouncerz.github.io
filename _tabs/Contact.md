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
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://source.unsplash.com/1600x900/?waterfall');
            background-size: cover;
            background-position: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            color: #333; /* Darker text for better contrast */
        }
        .container {
            max-width: 650px; /* Slightly wider container */
            margin: 50px auto; /* Increased top margin */
            background: rgba(255, 255, 255, 0.95); /* Less transparency */
            padding: 50px; /* Increased padding */
            border-radius: 12px; /* More rounded corners */
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Enhanced shadow */
            transition: transform 0.3s ease; /* Smooth transition on hover */
        }
        .container:hover {
            transform: translateY(-5px); /* Slight lift on hover */
        }
        h1 {
            text-align: center;
            color: #007bff;
            margin-bottom: 40px; /* Increased bottom margin */
            font-size: 2.5em; /* Larger heading */
        }
        label {
            display: block;
            margin: 25px 0 8px; /* Adjusted margins */
            font-weight: 600; /* Semi-bold font */
            color: #555; /* Slightly lighter label color */
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 15px; /* Increased padding */
            border: 1px solid #ddd; /* Lighter border */
            border-radius: 8px; /* More rounded corners */
            margin-bottom: 25px; /* Adjusted margins */
            transition: border-color 0.3s ease;
            font-size: 16px;
        }
        input:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2); /* Subtle focus shadow */
        }
        textarea {
            resize: vertical; /* Allow vertical resizing */
        }
        button {
            width: 100%;
            padding: 15px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px); /* Slight lift on hover */
        }
        #response {
            display: none;
            margin-top: 30px; /* Increased margin */
            text-align: center;
            font-size: 18px; /* Larger font */
        }
        .thank-you {
            background-color: #f5f5f5; /* Lighter background */
            padding: 30px; /* Increased padding */
            border-radius: 8px;
            text-align: center;
            margin-top: 30px;
            color: #444; /* Darker text */
        }
        footer {
            text-align: center;
            margin-top: auto;
            padding: 30px 0;
            background: rgba(255, 255, 255, 0.85); /* Adjusted transparency */
            width: 100%;
            font-size: 14px;
            color: #777;
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
