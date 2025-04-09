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
            background: linear-gradient(to bottom right, #2c3e50, #34495e); /* Darker, more muted gradient */
            margin: 0;
            padding: 0;
            color: #ecf0f1; /* Light text on dark background */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #34495e; /* Darker container background */
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
            color: #ecf0f1;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            min-height: 100vh;
            box-sizing: border-box;
        }

        h1,
        h2 {
            color: #4CAF50; /* Green accent for headings */
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section {
            padding: 20px;
            background-color: #2c3e50; /* Darker section background */
            text-align: center;
            margin: 10px;
            border-radius: 5px;
            border-left: 5px solid #4CAF50; /* Green accent for section border */
        }

        .section h2 {
            font-size: 1.8rem;
            text-align: center;
            color: #4CAF50; /* Green accent for section headings */
        }

        p {
            font-size: 1rem;
            color: #bdc3c7; /* Slightly darker light text for paragraphs */
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: center;
        }

        .mission {
            background-color: #34495e; /* Darker mission background */
            border-left: 5px solid #4CAF50; /* Green accent for mission border */
        }

        .mission h2 {
            color: #4CAF50; /* Green accent for mission heading */
        }

        i {
            color: #4CAF50; /* Green accent for icons */
            margin-right: 5px;
        }

        @media (min-width: 768px) {
            .container {
                padding: 40px;
            }

            .section {
                padding: 25px;
            }

            .section h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1.1rem;
                line-height: 1.8;
            }

            .mission {
                padding: 25px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="section">
            <h2><i class="fas fa-shield-alt"></i> Who We Are?</h2>
            <p>At Cyber Bouncerz, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
        </div>
        <div class="section mission">
            <h2><i class="fas fa-bullseye"></i> What Is Our Mission?</h2>
            <p>Our mission is to empower businesses with proactive cybersecurity strategies that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
        </div>
    </div>
</body>

</html>
