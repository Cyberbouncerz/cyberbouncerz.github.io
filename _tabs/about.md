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
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            color: #2c3e50;
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
        }
        .section h2 {
            font-size: 2rem;
            position: relative;
            padding-left: 40px;
        }
        .section h2::before {
            content: "\f05a"; /* Info circle icon */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #3498db;
        }
        p {
            font-size: 1.1rem;
            color: #7f8c8d;
            line-height: 1.8;
            margin-bottom: 20px;
        }
        .icon-container {
            text-align: center;
            margin-bottom: 30px;
        }
        .icon-container i {
            font-size: 6rem;
            color: #3498db;
            transition: transform 0.3s ease;
        }
        .icon-container i:hover {
            transform: scale(1.2);
        }
        .mission {
            background-color: #f4f6f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        /* Adding some subtle hover effects for the sections */
        .section:hover {
            background-color: #dfe6e9;
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        /* Button style */
        .cta-button {
            display: inline-block;
            padding: 12px 25px;
            margin-top: 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .cta-button:hover {
            background-color: #2980b9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                width: 90%;
                padding: 20px;
            }
            .section {
                margin-bottom: 30px;
                padding: 15px;
            }
            h1, h2 {
                font-size: 1.5rem;
            }
            .icon-container i {
                font-size: 4rem;
            }
            p {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .container {
                width: 95%;
                padding: 15px;
            }
            h1, h2 {
                font-size: 1.2rem;
            }
            .section {
                margin-bottom: 25px;
                padding: 10px;
            }
            .icon-container i {
                font-size: 3rem;
            }
            p {
                font-size: 0.9rem;
            }
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
            <p>At Cyber Bouncerz, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
        </div>

        <div class="section mission">
            <h2>What Is Our Mission?</h2>
            <p>Our mission is to empower businesses with proactive cybersecurity strategies that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
            <a href="#" class="cta-button">Learn More</a>
        </div>
    </div>

</body>
</html>

