---
# the default layout is 'page'
icon: fas fa-info-circle
order: 4
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Content</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(to bottom, lightblue, purple); /* Example gradient */
        }
        .container {
            width: 80%; /* Adjust as needed */
            max-width: 800px; /* Optional: set a max width */
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .section {
            background-color: #f0f0f0;
            padding: 20px;
            margin: 20px 0;
            border-radius: 8px;
        }
        .section h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>About</h1>

        <div class="section">
            <h2>Who We Are?</h2>
            <p>At Cyber Bouncerz, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
        </div>

        <div class="section">
            <h2>What Is Our Mission?</h2>
            <p>Our mission is to empower businesses with proactive cybersecurity strategies that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
        </div>
    </div>
</body>
</html>
