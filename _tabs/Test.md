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
        .services-container {
            display: flex;
            gap: 20px;
            padding: 0 15px;
            justify-content: center;
            overflow-x: auto;         /* Allow horizontal scrolling */
            scroll-snap-type: x mandatory; /* Enable snap scrolling */
            -webkit-overflow-scrolling: touch;
        }

        .service-item {
            flex: 0 0 auto;
            width: 300px;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 5px solid #4CAF50;
            opacity: 1;
            transform: translateY(0);
            animation: bounce-up-down 1s ease-in-out infinite alternate;
            scroll-snap-align: center; /* Ensure each item aligns in the center during scroll */
        }

        @keyframes bounce-up-down {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }

        /* Additional rules to center the first item */
        .services-container {
            display: flex;
            justify-content: flex-start;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
        }

        .service-item:first-child {
            margin-left: auto; /* Push the first item to the center */
            margin-right: auto; /* Center the first item horizontally */
        }
    </style>
</head>
<body>

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

</body>
</html>
