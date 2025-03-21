---
layout: page
permalink: /contact/
icon: fas fa-contact-icon
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            background: linear-gradient(135deg, #e0f7fa, #c2e9f2); /* Gradient background */
            font-family: 'Helvetica Neue', Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }

        .form-container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            text-align: left;
            transition: transform 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-5px);
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: calc(100% - 22px); /* Account for padding */
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input:focus,
        textarea:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        textarea {
            resize: vertical;
            min-height: 150px;
        }

        button {
            width: 100%;
            padding: 12px 20px;
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
            transform: translateY(-2px);
        }

        #response {
            margin-top: 20px;
            text-align: center;
            font-size: 16px;
            display: none;
        }

        .thank-you {
            background-color: #f0f8ff;
            padding: 20px;
            border-radius: 8px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Contact Us</h2>
        <form id="contactForm" action="https://formspree.io/f/xpwavqzy" method="POST">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" id="lastName" name="lastName">
            </div>
            <div class="form-group">
                <label for="email">Your Email (required)</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message (please avoid sharing sensitive health information. For sensitive inquiries, kindly email us directly.)</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div id="response" class="thank-you"></div>
    </div>

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
