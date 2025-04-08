---
layout: page
permalink: /test/
icon: fas fa-stream
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <style>
        body {
            background-color: #1e3a8a; /* Dark blue from the image */
            font-family: serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden; /* Prevent horizontal scroll bar */
            color: #f0f8ff; /* Light text for contrast */
        }

        .logo-container {
            width: 250px;
            height: 250px;
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            border: 5px solid #4CAF50; /* Green border */
            border-radius: 50%;
            background-color: #e0f7fa; /* Very light cyan background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
            animation: pulse 2s infinite alternate; /* Pulse animation for logo */
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.05);
            }
        }

        .logo-container img {
            max-width: 100%;
            height: auto;
            border-radius: 50%;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
            color: #f0f8ff; /* Light text */
        }

        .services-container {
            width: 100%;
            margin-bottom: 30px;
            overflow: hidden;
            position: relative;
        }

        .services-wrapper {
            display: flex;
            justify-content: flex-start;
            animation: scroll 12s linear infinite; /* Keep scroll animation */
            width: auto;
        }

        .service-item {
            flex: 0 0 300px; /* Set width to ensure proper space for the images */
            border: 1px solid #4CAF50; /* Green border */
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #e0f7fa; /* Very light cyan background */
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
            border-radius: 5px; /* Slightly rounded image corners */
        }

        h2 {
            font-size: 1.3em;
            margin-bottom: 10px;
            color: #1e3a8a; /* Dark blue text for headings */
        }

        .faq-container {
            width: 95%;
            box-sizing: border-box;
            background-color: #e0f7fa; /* Very light cyan background for FAQ */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h3 {
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
            color: #1e3a8a; /* Dark blue text for FAQ heading */
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            overflow: hidden;
        }

        .faq-question {
            background-color: #f9f9f9;
            color: #333;
            padding: 10px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: bold;
        }

        .faq-question::after {
            content: '+';
            font-size: 1.2em;
        }

        .faq-item.open .faq-question::after {
            content: '-';
        }

        .faq-answer {
            padding: 10px;
            background-color: #fff;
            color: #555;
            display: none; /* Initially hidden */
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        /* Bouncing animations for left, center, and right items (KEEP AS IS) */
        @keyframes bounce-left {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes bounce-center {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(10px);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes bounce-right {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Applying different animations to left, center, and right images (KEEP AS IS) */
        .service-item:nth-child(1) {
            animation: bounce-left 4s ease-in-out infinite;
        }

        .service-item:nth-child(2) {
            animation: bounce-center 4s ease-in-out infinite;
        }

        .service-item:nth-child(3) {
            animation: bounce-right 4s ease-in-out infinite;
        }

        /* Duplicate the service items for continuous bouncing effect (KEEP AS IS) */
        .service-item {
            flex-shrink: 0; /* Prevent the images from shrinking */
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* Mobile responsiveness (KEEP AS IS) */
        @media (max-width: 768px) {
            .logo-container {
                width: 200px;
                height: 200px;
            }

            h1 {
                font-size: 2em;
            }

            .service-item {
                flex: 0 0 80%; /* Adjust items for smaller screens */
                min-width: 250px;
                margin-right: 0;
                margin-bottom: 15px;
            }

            .services-wrapper {
                justify-content: center;
                animation: none; /* Stop scrolling animation on mobile */
                flex-wrap: wrap; /* Ensure items are neatly stacked */
            }

            .faq-container {
                padding: 0 10px;
            }

            /* Ensure only one of each service item is visible on mobile */
            .services-wrapper .service-item:nth-child(n+4) {
                display: none; /* Hide the duplicate service items */
            }
        }
    </style>
</head>
<body>

<div class="logo-container">
    <img src="PNG file-2.png" alt="Logo">
</div>

<h1>Our Services</h1>

<section class="services-container">
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
</section>

<div class="faq-container">
    <h3>Frequently Asked Questions</h3>
    <div class="faq-item">
        <div class="faq-question">What is Cyber Bouncerz?</div>
        <div class="faq-answer">Cyber Bouncerz is a collective of accredited cybersecurity consultants ready to address any cybersecurity concerns.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Is Cyber Bouncerz free?</div>
        <div class="faq-answer">Currently, all services provided by Cyber Bouncerz are free for everyone.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">Who is Cyber Bouncerz aimed to help?</div>
        <div class="faq-answer">Cyber Bouncerz is designed to assist anyone in need of cybersecurity services.</div>
    </div>
    <div class="faq-item">
        <div class="faq-question">How can I contact Cyber Bouncerz?</div>
        <div class="faq-answer">You can reach out to Cyber Bouncerz by clicking on the "contact us" tab on our website.</div>
    </div>
</div>

<script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            item.classList.toggle('open');
        });
    });
</script>

</body>
</html>
 
