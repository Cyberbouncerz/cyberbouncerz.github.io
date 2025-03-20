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
            background-image: url('https://example.com/waterfall.jpg'); /* Replace with your waterfall image URL */
            background-size: cover;
            background-position: center;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px; /* Increased width */
            margin: auto;
            background: rgba(255, 255, 255, 0.9); /* White with slight transparency */
            padding: 40px; /* Increased padding */
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            margin-bottom: 20px; /* Space below the container */
        }
        h1 {
            text-align: center;
            color: #007bff; /* Blue text */
            margin-bottom: 30px; /* Increased bottom margin */
        }
        label {
            display: block;
            margin: 20px 0 5px; /* Increased margin for labels */
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px; /* Increased margin for inputs */
            transition: border-color 0.3s;
        }
        input:focus, textarea:focus {
            border-color: #007bff; /* Focus color */
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
            background-color: #0056b3; /* Darker blue on hover */
        }
        #response {
            display: none;
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
        }
        .thank-you {
            background-color: #f0f0f0; /* Grey background for the thank you message */
            padding: 20px; /* Padding for the thank you section */
            border-radius: 5px; /* Rounded corners */
            text-align: center; /* Centered text */
            margin-top: 20px; /* Space above thank you section */
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
        <div id="response" class="thank-you"></div> <!-- Moved the thank you message into this div -->
    </div>

    <script>
        const form = document.getElementById('contactForm');
        const responseDiv = document.getElementById('response');

        form.onsubmit = function(event) {
            event.preventDefault(); // Prevent default form submission

            // Send form data using Fetch API
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
                    form.reset(); // Reset form fields
                } else {
                    responseDiv.innerText = 'There was a problem sending your message.';
                    responseDiv.style.display = 'block';
                }
            })
            .catch(error => {
                responseDiv.innerText = 'There was a problem sending your message.';
                responseDiv.style.display = 'block';
            });
        };
    </script>
</body>
</html>
