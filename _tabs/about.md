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
  <title>Cyber Bouncerz Information</title>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
    }
    .container {
      max-width: 900px;
      margin: auto;
      background-color: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      margin-top: 40px;
    }
    .logo {
      text-align: center;
      margin-bottom: 40px;
    }
    .logo img {
      max-width: 150px;
      height: auto;
    }
    .logo h1 {
      font-size: 2.5em;
      font-weight: bold;
      color: #343a40;
      margin-top: 10px;
    }
    .section {
      margin-bottom: 40px;
    }
    .section h2 {
      font-size: 2em;
      color: #343a40;
      margin-bottom: 15px;
    }
    .section p {
      font-size: 1.1em;
      color: #6c757d;
      line-height: 1.6;
    }
    .right-align {
      text-align: right;
    }
    .cta-button {
      display: inline-block;
      padding: 12px 25px;
      background-color: #007bff;
      color: white;
      font-size: 1.1em;
      border-radius: 5px;
      text-decoration: none;
      margin-top: 20px;
      text-align: center;
      transition: background-color 0.3s;
    }
    .cta-button:hover {
      background-color: #0056b3;
    }
    @media screen and (max-width: 768px) {
      .container {
        padding: 20px;
      }
      .section h2 {
        font-size: 1.7em;
      }
      .section p {
        font-size: 1em;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <header class="logo">
      <!-- Add your logo image here -->
      <img src="logo-placeholder.png" alt="Cyber Bouncerz Logo">
      <h1>CYBER BOUNCERZ</h1>
    </header>

    <main>
      <div class="section">
        <h2>Who we are?</h2>
        <p>At Cyber Bouncerz, we are a team of accredited cybersecurity consultants dedicated to protecting your digital assets. Our diverse expertise allows us to address a wide range of cybersecurity concerns, from risk assessments to incident response planning.</p>
      </div>

      <div class="section">
        <h2 class="right-align">What is our mission?</h2>
        <p>Our mission is to empower businesses with proactive cybersecurity strategies that mitigate risks and enhance resilience. We focus on understanding your unique challenges and developing customized solutions to safeguard your sensitive information, enabling you to concentrate on what you do best.</p>
      </div>

      <!-- Call to Action Button -->
      <div class="section">
        <a href="#contact" class="cta-button">Get in Touch</a>
      </div>
    </main>
  </div>

</body>
</html>
