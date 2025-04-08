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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 40px;
            color: #fff;
            overflow-x: auto;
            max-width: 1400px; /* Slightly wider for desktop */
            margin: 0 auto;
        }

        .logo-container {
            text-align: left; /* Align logo to the left on desktop */
            margin-bottom: 40px;
            padding-left: 40px; /* Add some padding */
        }

        .logo-container img {
            max-width: 180px; /* Slightly larger logo */
            height: auto;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* More pronounced shadow */
            animation: pulse 2s ease-in-out infinite alternate;
            cursor: pointer; /* Indicate it might be clickable */
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.03); } /* Subtler pulse on desktop */
        }

        h1 {
            font-size: 3em; /* Larger heading */
            color: #4CAF50;
            margin-bottom: 40px;
            padding-left: 40px;
        }

        .services-container {
            display: grid; /* Switch to a grid layout */
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); /* Responsive columns */
            gap: 40px;
            padding: 0 40px;
        }

        .service-item {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 12px; /* Slightly more rounded */
            padding: 30px; /* More padding */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15); /* Enhanced shadow */
            border-left: 6px solid #4CAF50; /* Thicker border */
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Smooth hover transitions */
        }

        .service-item:hover {
            transform: translateY(-5px); /* Subtle lift on hover */
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* More pronounced shadow on hover */
        }

        .service-item img {
            max-width: 100%;
            height: auto;
            border-radius: 10px; /* More rounded images */
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .service-item h2 {
            font-size: 1.8em; /* Larger heading */
            color: #f1f1f1;
            margin-bottom: 15px;
        }

        .service-item p {
            line-height: 1.7; /* Improved readability */
            color: #ccc;
            font-size: 1.1em; /* Slightly larger text */
        }

        .faq-container {
            margin-top: 60px;
            padding: 0 40px;
        }

        .faq-container h3 {
            font-size: 2.5em; /* Larger heading */
            color: #4CAF50;
            margin-bottom: 35px;
            text-align: left; /* Align left */
        }

        .faq-list {
            display: grid; /* Use a grid for FAQ items */
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); /* Responsive columns */
            gap: 20px;
        }

        .faq-item {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .faq-item:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 10px;
            color: #f1f1f1;
            cursor: pointer;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 1.2em;
        }

        .faq-answer {
            margin-top: 10px;
            color: #ccc;
            line-height: 1.6;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
            font-size: 1em;
        }

        .faq-question.active + .faq-answer {
            max-height: 300px; /* Adjust as needed */
        }
    </style>
</head>
<body>

    <div class="logo-container">
        <img src="PNG file-2.png" alt="Logo" onclick="window.location.href='#'" style="cursor: pointer;">
    </div>

    <h1>Our Services</h1>

    <section class="services-container">
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
    </section>

    <div class="faq-container">
        <h3>Frequently Asked Questions</h3>
        <div class="faq-list">
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
    </div>

    <script>
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                question.classList.toggle('active');
                const answer = question.nextElementSibling;
                answer.style.maxHeight = answer.style.maxHeight ? null : answer.scrollHeight + 'px';
            });
        });
    </script>

</body>
</html>

