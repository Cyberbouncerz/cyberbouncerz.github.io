---
layout: page
permalink: /test/
icon: fas fa-stream
---

<!DOCTYPE html>
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
            overflow-x: hidden;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
        }

        .logo-container img {
            max-width: 150px;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: pulse 2s ease-in-out infinite alternate;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            100% { transform: scale(1.05); }
        }

        h1 {
            font-size: 2.2em;
            text-align: center;
            margin-bottom: 25px;
            color: #4CAF50;
        }

        .services-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 0 15px;
            overflow-x: auto; /* Enable horizontal scroll for mobile */
            -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS mobile */
        }

        .service-item {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #4CAF50;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s ease-out forwards;
        }

        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        .service-item:nth-child(2) { animation-delay: 0.2s; }
        .service-item:nth-child(3) { animation-delay: 0.4s; }

        .service-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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
        }

        .faq-container h3 {
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 25px;
            color: #4CAF50;
        }

        .faq-question {
            font-weight: bold;
            margin-bottom: 8px;
            color: #f1f1f1;
            cursor: pointer;
            padding: 10px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .faq-answer {
            margin-bottom: 15px;
            color: #ccc;
            line-height: 1.6;
            padding: 0 10px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }

        .faq-question.active + .faq-answer {
            max-height: 200px; /* Adjust as needed */
        }

        /* Desktop Styles */
        @media (min-width: 769px) {
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                overflow-x: hidden; /* Hide overall horizontal scroll */
            }
            .logo-container {
                margin: 20px auto;
                display: flex;
                justify-content: center;
            }
            .logo-container img {
                max-width: 150px;
                height: auto;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                animation: pulse 2s ease-in-out infinite alternate;
            }
            h1 {
                font-size: 2.5em;
                color: #4CAF50;
                text-align: center;
                margin-bottom: 30px;
            }
            .services-container {
                display: flex;
                flex-direction: row;
                justify-content: flex-start; /* Start from the left */
                gap: 30px;
                padding: 0 30px;
                flex-wrap: nowrap;
                overflow-x: auto; /* Enable horizontal scroll for the container */
                -webkit-overflow-scrolling: touch; /* For smooth scrolling on iOS */
                animation: scroll-left-right 20s linear infinite alternate; /* Left to right scroll */
            }
            @keyframes scroll-left-right {
                0% { transform: translateX(0); }
                100% { transform: translateX(calc(0% - (300px + 30px) * 2)); } /* Adjust based on item width and gap */
            }
            .service-item {
                flex: 0 0 auto;
                width: 300px;
                border-radius: 10px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                background-color: rgba(255, 255, 255, 0.05);
                border-left: 5px solid #4CAF50;
                animation: bounce-up-down 1s ease-in-out infinite alternate; /* Up and down bounce */
            }
            @keyframes bounce-up-down {
                0% { transform: translateY(0); }
                100% { transform: translateY(-20px); }
            }
            .service-item img {
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                margin-bottom: 15px;
                max-width: 80%;
                height: auto;
            }
            .service-item h2 {
                font-size: 1.5em;
                color: #f1f1f1;
            }
            .service-item p {
                color: #ccc;
            }
            .faq-container {
                padding: 0 30px;
                margin-top: 60px;
            }
            .faq-container h3 {
                font-size: 1.8em;
                color: #4CAF50;
                text-align: center;
                margin-bottom: 25px;
            }
            .faq-question {
                color: #fff;
                border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            }
            .faq-answer {
                color: #ccc;
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
