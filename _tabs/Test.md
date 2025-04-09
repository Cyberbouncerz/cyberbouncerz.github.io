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
            padding: 20px;
            color: #fff;
            overflow-x: auto;
            width: 100%;
            box-sizing: border-box;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .logo-container img {
            max-width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: pulse-shift 2s ease-in-out infinite alternate;
        }

        @keyframes pulse-shift {
            0% { 
                transform: scale(1) translateX(0); 
            }
            100% { 
                transform: scale(1.05) translateX(5px); 
            }
        }

        h1 {
            font-size: 2.2em;
            text-align: center;
            margin-bottom: 25px;
            color: #4CAF50;
        }

        .services-container {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            gap: 20px;
            padding: 0 15px;
            width: 100%;
        }

        .service-item {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #4CAF50;
            flex: 1 1 30%;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards, swivel-drop 2s ease-in-out infinite alternate;
            transition: box-shadow 0.3s ease;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes swivel-drop {
            0% { 
                transform: rotateY(0deg) translateY(0);
            }
            25% { 
                transform: rotateY(15deg) translateY(10px); 
            }
            50% { 
                transform: rotateY(-15deg) translateY(20px);
            }
            75% { 
                transform: rotateY(15deg) translateY(10px); 
            }
            100% { 
                transform: rotateY(0deg) translateY(0); 
            }
        }

        .service-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            animation: pulse-shift 2s ease-in-out infinite alternate;
        }

        .service-item h2 {
            font-size: 1.5em;
            color: #f1f1f1;
            margin-bottom: 10px;
        }

        .service-item p {
            line-height: 1.6;
            color: #ccc;
        }

        .faq-container {
            margin-top: 40px;
            padding: 0 15px;
            width: 100%;
        }

        .faq-container h3 {
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 25px;
            color: #4CAF50;
        }

        .faq-item {
            margin-bottom: 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 0;
            color: #f1f1f1;
            cursor: pointer;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .faq-question::after {
            content: '+';
            font-size: 1.2em;
        }

        .faq-item.open .faq-question::after {
            content: '-';
        }

        .faq-answer {
            color: #ccc;
            line-height: 1.6;
            padding: 10px;
            background-color: #34495e;
            display: none;
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        /* Mobile Styles */
        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            h1 {
                font-size: 1.8em;
                margin-bottom: 15px;
            }

            .services-container {
                flex-direction: column;
                gap: 15px;
            }

            .service-item {
                width: 100%;
                padding: 15px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transform: none; /* Remove animation for smoother mobile experience */
                animation: fadeInUp 0.6s ease-out forwards;
            }

            .service-item h2 {
                font-size: 1.2em;
            }

            .service-item p {
                font-size: 0.9em;
                color: #ccc;
            }

            .faq-container h3 {
                font-size: 1.5em;
                margin-bottom: 20px;
            }

            .faq-question {
                font-size: 1.1em;
                padding: 10px;
            }

            .faq-answer {
                font-size: 0.9em;
            }

            .logo-container img {
                max-width: 120px; /* Adjust logo size for mobile */
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
