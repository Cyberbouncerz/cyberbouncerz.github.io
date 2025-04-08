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
            animation: pulse 2s ease-in-out infinite alternate; /* Add pulse animation to logo */
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
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
            color: #fff; /* Keep text color consistent with theme */
            animation: fadeInDown 1s ease-out; /* Initial fade-in animation */
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
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
            animation: scroll 12s linear infinite, slightBounce 1s ease-in-out infinite alternate; /* Combine scroll and slight bounce */
            width: auto; /* Adjust width to contain all items */
        }

        @keyframes slightBounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-5px); }
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
            flex-shrink: 0; /* Prevent the images from shrinking */
            animation: fadeInUp 0.8s ease-out; /* Initial fade-in for each service item */
        }

        .service-item:last-child {
            margin-right: 0;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .service-item img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
            border-radius: 8px; /* Add slight border radius to images */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add subtle shadow to images */
        }

        h2 {
            font-size: 1.3em;
            margin-bottom: 10px;
            color: #333; /* Darker text for headings */
        }

        .faq-container {
            width: 95%;
            box-sizing: border-box;
            animation: slideInLeft 1s ease-out; /* Slide in animation for FAQ */
        }

        @keyframes slideInLeft {
            0% {
                opacity: 0;
                transform: translateX(-20px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        h3 {
            font-size: 1.8em;
            margin-bottom: 20px;
            text-align: center;
            color: #fff; /* Keep text color consistent */
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 5px;
            color: #ddd; /* Lighter color for questions */
            cursor: pointer; /* Indicate it's clickable */
            transition: color 0.3s ease; /* Smooth hover effect */
        }

        .faq-question:hover {
            color: #4CAF50; /* Highlight on hover */
        }

        .faq-answer {
            margin-bottom: 15px;
            color: #ccc; /* Lighter color for answers */
            line-height: 1.6; /* Improve readability */
            overflow: hidden;
            max-height: 0;
            transition: max-height 0.3s ease-in-out, padding 0.3s ease-in-out;
            padding: 0;
        }

        .faq-item.open .faq-answer {
            max-height: 200px; /* Adjust as needed */
            padding: 10px 0;
        }

        .faq-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); /* Subtle divider */
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        .faq-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        /* Continuous scrolling animation for services */
        @keyframes scroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-315px * 3)); } /* Adjust based on item width + margin */
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .logo-container {
                width: 150px;
                height: 150px;
            }

            h1 {
                font-size: 2em;
            }

            .services-wrapper {
                animation: scroll-mobile 18s linear infinite, slightBounceMobile 1s ease-in-out infinite alternate; /* Slower scroll on mobile */
                justify-content: flex-start; /* Start from left on mobile */
            }

            @keyframes scroll-mobile {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(-95%)); } /* Scroll across most of the width */
            }

            @keyframes slightBounceMobile {
                0% { transform: translateY(0); }
                100% { transform: translateY(-3px); }
            }

            .service-item {
                flex: 0 0 80%; /* Adjust items for smaller screens */
                min-width: 250px;
                margin-right: 15px;
                margin-bottom: 20px;
            }

            .faq-container {
                padding: 0 10px;
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
        <div class="faq-item">
            <dt class="faq-question">What is Cyber Bouncerz?</dt>
            <dd class="faq-answer">Cyber Bouncerz is a collective of accredited cybersecurity consultants ready to address any cybersecurity concerns.</dd>
        </div>

        <div class="faq-item">
            <dt class="faq-question">Is Cyber Bouncerz free?</dt>
            <dd class="faq-answer">Currently, all services provided by Cyber Bouncerz are free for everyone.</dd>
        </div>

        <div class="faq-item">
            <dt class="faq-question">Who is Cyber Bouncerz aimed to help?</dt>
            <dd class="faq-answer">Cyber Bouncerz is designed to assist anyone in need of cybersecurity services.</dd>
        </div>

        <div class="faq-item">
            <dt class="faq-question">How can I contact Cyber Bouncerz?</dt>
            <dd class="faq-answer">You can reach out to Cyber Bouncerz by clicking on the "contact us" tab on our website.</dd>
        </div>
    </dl>
</div>

<script>
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            const faqItem = question.parentNode;
            faqItem.classList.toggle('open');
            const answer = question.nextElementSibling;
            answer.style.maxHeight = faqItem.classList.contains('open') ? answer.scrollHeight + 'px' : null;
        });
    });
</script>

</body>
</html>
