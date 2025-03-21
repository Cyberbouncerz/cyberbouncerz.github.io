---
layout: page
permalink: /test/
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        body {
            font-family: serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            height: 100vh; /* Make sure the body takes full height */
            flex-direction: column;
            text-align: center;
        }

        /* Logo Container with Rounded, Centered Border */
        .logo-container {
            width: 250px; /* Adjust the size of the logo container */
            height: 250px; /* Set the height to be equal to the width to make it circular */
            padding: 10px; /* Padding inside the border */
            border: 5px solid #4CAF50; /* Green border around the logo */
            border-radius: 50%; /* Round border */
            background-color: #f1f1f1; /* Light background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow around the border */
            display: flex;
            justify-content: center;
            align-items: center; /* Center the logo inside */
        }

        .logo-container img {
            max-width: 80%; /* Adjust logo size to fit inside the circle */
            height: auto;
            border-radius: 50%; /* Optional: Make the image itself round if it's square */
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        .services-container {
            width: 95%;
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .services-wrapper {
            display: flex;
            animation: scroll 15s linear infinite;
            width: 200%;
        }

        .service-item {
            flex: 0 0 300px;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            box-sizing: border-box;
            margin-right: 15px;
        }

        .service-item:last-child {
            margin-right: 0;
        }

        .service-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .faq-container {
            width: 95%;
            box-sizing: border-box;
        }

        h3 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .faq-answer {
            margin-bottom: 15px;
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @media (max-width: 768px) {
            .service-item {
                flex: 0 0 80%;
                min-width: 250px;
            }
        }
    </style>
</head>
<body>

<!-- Logo Section with Rounded Border -->
<div class="logo-container">
    <!-- Add your logo image here -->
    <img src="PNG file-2.png" alt="Logo">
</div>

<h1>Our Services</h1>

<div class="services-container">
    <div class="services-wrapper">
        <div class="service-item">
            <img src="1742496723906.jpg" alt="Cybersecurity expert panel discussing digital safety">
            <h2>Expert Panel</h2>
            <p>Connect with a team of cybersecurity experts covering a range of topics, from protecting your online presence to navigating the digital landscape, all here to answer your Questions and share practical insights.</p>
        </div>

        <div class="service-item">
            <img src="1742498458560.jpg" alt="Simple and clean user interface design">
            <h2>User Friendly Interface</h2>
            <p>Our website features a simple and easy to use design, ensuring that users can effortlessly find the cybersecurity information they need with clear categories, and a user-friendly layout.</p>
        </div>

        <div class="service-item">
            <img src="1742497812008.jpg" alt="Clear and concise terms explanation">
            <h2>User Friendly Terms</h2>
            <p>We explain cybersecurity without using complicated language so it is easy for everyone to understand. Aiming to simplify the world of digital security for a straightforward and inclusive experience.</p>
        </div>
    </div>
</div>

</body>
</html>
