---
# the default layout is 'page'
icon: fas fa-info-circle
order: 4
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Bouncerz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to bottom right, #3498db, #8e44ad);
            margin: 0;
            padding: 0;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            width: 90%; /* Increased container width */
            max-width: 1000px; /* added max width for larger screens */
            padding: 40px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: #2c3e50;
            text-align: center;
        }
        h1, h2 {
            color: #2c3e50;
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: #ecf0f1;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 80%; /* Increased section width */
            margin-left: auto;
            margin-right: auto;
        }
        .section h2 {
            font-size: 2rem;
            text-align: center;
        }
        p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.8;
            margin-bottom: 20px;
            text-align: center;
        }
        .mission {
            background-color: #f4f6f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .section:hover {
            background-color: #dfe6e9;
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .cta-button {
            display: none;
        }
        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 20px;
            }
            .section {
                width: 90%;
                margin-bottom: 30px;
                padding: 15px;
            }
            h1, h2 {
                font-size: 1.5rem;
            }
            p {
                font-size: 1rem;
            }
        }
        @media (max-width: 480px) {
            .container {
                width: 98%;
                padding: 15px;
            }
            .section {
                width: 95%;
                margin-bottom: 25px;
                padding: 10px;
            }
            h1, h2 {
                font-size: 1.2rem;
            }
            p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
            <h2>Who We Are?</h2>
            <p>At Cyber Bouncerz, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
        </div>
        <div class="section mission">
            <h2>What Is Our Mission?</h2>
            <p>Our mission is to empower businesses with proactive cybersecurity strategies that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
        </div>
    </div>
</body>
</html>
