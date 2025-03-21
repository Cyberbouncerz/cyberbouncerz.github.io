---
# the default layout is 'page'
icon: fas fa-info-circle
order: 4
---

<!DOCTYPE html>
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
            width: 100%;
            height: 100vh;
            padding: 20px; /* Adjusted padding for better mobile view */
            background-color: #fff;
            border-radius: 0;
            box-shadow: none;
            color: #2c3e50;
            margin: 0;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1,
        h2 {
            color: #2c3e50;
            text-align: center;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section {
            padding: 15px; /* Adjusted padding for better mobile view */
            background-color: #ecf0f1;
            text-align: center;
            margin: 10px;
        }

        .section h2 {
            font-size: 1.8rem; /* Adjusted font size for better mobile view */
            text-align: center;
        }

        p {
            font-size: 1rem;
            color: #7f8c8d;
            line-height: 1.6; /* Adjusted line height for better readability */
            margin-bottom: 20px;
            text-align: center;
        }

        .mission {
            background-color: #f4f6f9;
            padding: 15px; /* Adjusted padding for better mobile view */
            text-align: center;
            margin: 10px;
        }

        @media (min-width: 768px) { /* Changed to min-width for desktop first approach */
            .container {
                padding: 40px;
            }

            .section {
                padding: 20px;
            }

            .section h2 {
                font-size: 2rem;
            }

            p {
                font-size: 1.1rem;
                line-height: 1.8;
            }

            .mission {
                padding: 20px;
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
