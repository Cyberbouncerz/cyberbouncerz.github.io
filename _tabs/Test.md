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
          background-color: #2c3e50;
            font-family: serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden; /* Prevent horizontal scroll bar */
        }

        .logo-container {
            width: 250px;
            height: 250px;
            text-align: center;
            margin: 20px auto;
            padding: 20px;
            border: 5px solid #4CAF50;
            border-radius: 50%;
            background-color: #f1f1f1;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: center;
            align-items: center;
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
            animation: bounce 4s ease-in-out infinite; /* Speed up the bounce */
            width: 100%;
        }

        .service-item {
            flex: 0 0 300px; /* Set width to ensure proper space for the images */
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
            font-size: 1.3em;
            margin-bottom: 10px;
        }

        .faq-container {
            width: 95%;
            box-sizing: border-box;
        }

        h3 {
            font-size: 1.8em;
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

        /* Bouncing animations for left, center, and right items */
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

        /* Applying different animations to left, center, and right images */
        .service-item:nth-child(1) {
            animation: bounce-left 4s ease-in-out infinite;
        }

        .service-item:nth-child(2) {
            animation: bounce-center 4s ease-in-out infinite;
        }

        .service-item:nth-child(3) {
            animation: bounce-right 4s ease-in-out infinite;
        }

        /* Duplicate the service items for continuous bouncing effect */
        .services-wrapper {
            width: auto;
            animation: scroll 12s linear infinite;
        }

        .service-item {
            flex-shrink: 0; /* Prevent the images from shrinking */
        }

        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .logo-container {
                width: 150px; /* Slightly smaller logo */
                height: 150px;
            }

            h1 {
                font-size: 1.8em; /* Slightly smaller main heading */
                margin-bottom: 15px;
            }

            .services-container {
                overflow: auto; /* Allow vertical scrolling for services */
                padding: 10px; /* Add some padding around the container */
            }

            .services-wrapper {
                display: flex;
                flex-direction: row; /* Keep items in a row for a potential carousel */
                justify-content: flex-start; /* Align items to the start */
                align-items: stretch; /* Make items the same height */
                animation: none; /* Stop the continuous horizontal scroll */
                flex-wrap: nowrap; /* Prevent wrapping for carousel-like behavior */
                overflow-x: auto; /* Enable horizontal scrolling for the carousel */
                scroll-snap-type: x mandatory; /* Enable smooth snapping for carousel */
                -webkit-overflow-scrolling: touch; /* Enable smooth scrolling on iOS */
                padding-bottom: 15px; /* Add some space below the carousel */
            }

            .service-item {
                flex: 0 0 80%; /* Make each item take up most of the screen width */
                min-width: auto; /* Allow width to be controlled by flex-basis */
                margin-right: 15px; /* Keep some spacing between items */
                margin-bottom: 0; /* Remove bottom margin as they are side-by-side */
                scroll-snap-align: start; /* Snap items to the start of the container */
            }

            .service-item:last-child {
                margin-right: 0; /* Remove right margin for the last item */
            }

            .service-item img {
                margin-bottom: 10px; /* Slightly less margin below the image */
            }

            h2 {
                font-size: 1.2em; /* Slightly smaller service title */
                margin-bottom: 8px;
            }

            p {
                font-size: 0.9em; /* Slightly smaller paragraph text */
            }

            .faq-container {
                padding: 0 15px; /* Adjust padding for FAQ */
            }

            h3 {
                font-size: 1.6em; /* Slightly smaller FAQ heading */
                margin-bottom: 15px;
            }

            .services-wrapper .service-item:nth-child(n+4) {
                /* Keep the duplicate items for the scrollable carousel */
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
    <dl>
        <dt class="faq-question">What is Cyber Bouncerz?</dt>
        <dd class="faq-answer">Cyber Bouncerz is a collective of accredited cybersecurity consultants ready to address any cybersecurity concerns.</dd>

        <dt class="faq-question">Is Cyber Bouncerz free?</dt>
        <dd class="faq-answer">Currently, all services provided by Cyber Bouncerz are free for everyone.</dd>

        <dt class="faq-question">Who is Cyber Bouncerz aimed to help?</dt>
        <dd class="faq-answer">Cyber Bouncerz is designed to assist anyone in need of cybersecurity services.</dd>

        <dt class="faq-question">How can I contact Cyber Bouncerz?</dt>
        <dd class="faq-answer">You can reach out to Cyber Bouncerz by clicking on the "contact us" tab on our website.</dd>
    </dl>
</div>

</body>
</html>
