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
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #2c3e50;
            text-align: center;
            font-weight: 700;
        }
        .section {
            margin-bottom: 40px;
        }
        .section h2 {
            font-size: 2rem;
            position: relative;
            padding-left: 30px;
        }
        .section h2::before {
            content: "\f05a"; /* Info circle icon */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.8rem;
            color: #3498db;
        }
        p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.6;
        }
        .highlight {
            color: #3498db;
            font-weight: bold;
        }
        .icon-container {
            text-align: center;
        }
        .icon-container i {
            font-size: 4rem;
            color: #3498db;
        }
        .mission {
            background-color: #ecf0f1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="section icon-container">
            <i class="fas fa-info-circle"></i>
        </div>
        
        <div class="section">
            <h2>Who We Are?</h2>
            <p>At <span class="highlight">Cyber Bouncerz</span>, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
        </div>

        <div class="section mission">
            <h2>What Is Our Mission?</h2>
            <p>Our mission is to empower businesses with <span class="highlight">proactive cybersecurity strategies</span> that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
        </div>
    </div>

</body>
</html>
