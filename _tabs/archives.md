---
layout: archives
icon: fas fa-archive
order: 3
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
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-align: center;
        }

        .services-container {
            width: 95%;
            margin-bottom: 30px;
            overflow: hidden; /* Important for looping */
        }

        .services-wrapper {
            display: flex;
            animation: scroll 15s linear infinite; /* Animation for looping */
        }

        .service-item {
            flex: 0 0 300px;
            border: 1px solid #ddd;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            box-sizing: border-box;
            margin-right: 15px; /* Spacing between items */
        }

        .service-item:last-child {
            margin-right: 0; /* Remove right margin from last item */
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
            100% { transform: translateX(-100%); } /* Move all items to the left */
        }

        /* Responsive adjustments for smaller screens */
        @media (max-width: 768px) {
            .service-item {
                flex: 0 0 80%;
                min-width: 250px;
            }
        }
    </style>
</head>
<body>

<h1>Our Services</h1>

<div class="services-container">
    <div class="services-wrapper">
        <div class="service-item">
            <!-- Change the image source below to your image path -->
            <img src="your-expert-panel-image.jpg" alt="Expert Panel">
            <h2>Expert Panel</h2>
            <p>Connect with a team of cybersecurity experts covering a range of topics, from protecting your online presence to navigating the digital landscape, all here to answer your Questions and share practical insights.</p>
        </div>
        <div class="service-item">
            <!-- Change the image source below to your image path -->
            <img src="your-user-friendly-interface-image.jpg" alt="User Friendly Interface">
            <h2>User Friendly Interface</h2>
            <p>Our website features a simple and easy to use design, ensuring that users can effortlessly find the cybersecurity information they need with clear categories, and a user-friendly layout.</p>
        </div>
        <div class="service-item">
            <!-- Change the image source below to your image path -->
            <img src="your-user-friendly-terms-image.jpg" alt="User Friendly Terms">
            <h2>User Friendly Terms</h2>
            <p>We explain cybersecurity without using complicated language so it is easy for everyone to understand. Aiming to simplify the world of digital security for a straightforward and inclusive experience.</p>
        </div>
        <div class="service-item">
            <!-- Example image with a local file, change the image source accordingly -->
            <img src="1742496723906.jpg" alt="Expert Panel">
            <h2>Expert Panel</h2>
            <p>Connect with a team of cybersecurity experts covering a range of topics, from protecting your online presence to navigating the digital landscape, all here to answer your Questions and share practical insights.</p>
        </div>
        <div class="service-item">
            <!-- Example image with a local file, change the image source accordingly -->
            <img src="1742498458560.jpg" alt="User Friendly Interface">
            <h2>User Friendly Interface</h2>
            <p>Our website features a simple and easy to use design, ensuring that users can effortlessly find the cybersecurity information they need with clear categories, and a user-friendly layout.</p>
        </div>
        <div class="service-item">
            <!-- Example image with a local file, change the image source accordingly -->
            <img src="1742497812008.jpg" alt="User Friendly Terms">
            <h2>User Friendly Terms</h2>
            <p>We explain cybersecurity without using complicated language so it is easy for everyone to understand. Aiming to simplify the world of digital security for a straightforward and inclusive experience.</p>
        </div>
    </div>
</div>

<div class="faq-container">
    <h3>Frequently Asked Questions</h3>

    <div class="faq-item">
        <p class="faq-question">What is Cyber Bouncerz?</p>
        <p class="faq-answer">Cyber Bouncerz is a collective of accredited cybersecurity consultants ready to address any cybersecurity concerns.</p>
    </div>

    <div class="faq-item">
        <p class="faq-question">Is Cyber Bouncerz free?</p>
        <p class="faq-answer">Currently, all services provided by Cyber Bouncerz are free for everyone.</p>
    </div>

    <div class="faq-item">
        <p class="faq-question">Who is Cyber Bouncerz aimed to help?</p>
        <p class="faq-answer">Cyber Bouncerz is designed to assist anyone in need of cybersecurity services.</p>
    </div>

    <div class="faq-item">
        <p class="faq-question">How can I contact Cyber Bouncerz?</p>
        <p class="faq-answer">You can reach out to Cyberbouncerz by clicking on the "contact us" tab on our website.</p>
    </div>
</div>

</body>
</html>
