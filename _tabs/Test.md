---
layout: page
permalink: /pricing/
icon: fas fa-dollar-sign
---

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pricing</title>
    <script type="text/javascript" src="https://js.squareup.com/v2/paymentform"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #2c3e50;
            color: #fff;
            margin: 0;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        header {
            text-align: center;
            margin-bottom: 40px;
        }
        header h1 {
            color: #4CAF50;
            font-size: 2.5em;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 40px;
        }
        .pricing-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 5px solid #4CAF50;
            border-radius: 10px;
            padding: 30px;
            width: 300px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
        }
        .pricing-card:nth-child(2) {
            animation-delay: 0.2s;
        }
        .pricing-card:nth-child(3) {
            animation-delay: 0.4s;
        }
        .pricing-card:nth-child(4) {
            animation-delay: 0.6s;
        }
        .pricing-card:hover {
            transform: scale(1.03);
        }
        .pricing-card h2 {
            color: #4CAF50;
            font-size: 1.8em;
            margin-bottom: 15px;
        }
        .price {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .price span {
            font-size: 0.8em;
            color: #bbb;
        }
        .features {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }
        .features li {
            padding: 8px 0;
            border-bottom: 1px solid #444;
        }
        .features li:last-child {
            border-bottom: none;
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
            display: inline-block;
        }
        .btn:hover {
            background-color: #388e3c;
        }
        .content {
            text-align: center;
            padding: 30px 20px;
            background-color: rgba(255, 255, 255, 0.05);
            border-left: 5px solid #4CAF50;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            max-width: 800px;
            margin: 0 auto 40px;
            animation: fadeInUp 0.6s ease-out forwards;
            opacity: 0;
            animation-delay: 0.8s;
        }
        .content h2 {
            color: #4CAF50;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .content p {
            line-height: 1.6;
        }

        /* Payment Form Styles */
        #payment-form {
            width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .sq-input {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        #submit-button {
            width: 100%;
            padding: 12px;
            background-color: #0077b5;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        #submit-button:hover {
            background-color: #005f8b;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <header>
        <h1>Our Pricing Plans</h1>
    </header>

    <div class="container">
        <div class="pricing-card">
            <h2>New Customer</h2>
            <div class="price">$0</div>
            <ul class="features">
                <li>5 tickets</li>
            </ul>
            <a href="#" class="btn">Get Started</a>
        </div>

        <div class="pricing-card">
            <h2>Basic</h2>
            <div class="price">$10 <span>/month</span></div>
            <ul class="features">
                <li>10 tickets/month</li>
            </ul>
            <a href="#" class="btn">Choose Basic</a>
        </div>

        <div class="pricing-card">
            <h2>Standard</h2>
            <div class="price">$20 <span>/month</span></div>
            <ul class="features">
                <li>25 tickets/month</li>
            </ul>
            <a href="#" class="btn">Choose Standard</a>
        </div>

        <div class="pricing-card">
            <h2>Premium</h2>
            <div class="price">$30 <span>/month</span></div>
            <ul class="features">
                <li>40 tickets/month</li>
            </ul>
            <a href="#" class="btn">Go Premium</a>
        </div>
    </div>

    <!-- Square Payment Form -->
    <div id="payment-form">
        <form id="nonce-form">
            <label for="card-number">Card Number</label>
            <div id="card-number"></div>

            <label for="expiration-date">Expiration Date</label>
            <div id="expiration-date"></div>

            <label for="cvv">CVV</label>
            <div id="cvv"></div>

            <label for="postal-code">Postal Code</label>
            <div id="postal-code"></div>

            <button type="submit" id="submit-button">Pay Now</button>
        </form>
    </div>

    <div class="content">
        <h2>Why Choose Our Platform?</h2>
        <p>
            We offer flexible and affordable pricing plans designed to scale with your needs. Our platform provides a robust set of features, excellent support, and a seamless experience. Whether you're just starting out or need to manage a high volume of requests, we have a plan that's right for you. Experience the difference today!
        </p>
    </div>

    <script type="text/javascript">
        var paymentForm = new SqPaymentForm({
            applicationId: 'pk_test_51RC15lGfVDYahxbqT5zctyTzHhSM4opqVNG2VfxA8jaHnTrQnLFwZIzHj5Qi9PMXMC20X52GzHQz8hLs67V9NT8000wzARSrzi', // Replace with your actual Square Application ID
            inputClass: 'sq-input',
            cardNumber: {
                elementId: 'card-number',
                placeholder: 'Card Number'
            },
            expirationDate: {
                elementId: 'expiration-date',
                placeholder: 'MM/YY'
            },
            cvv: {
                elementId: 'cvv',
                placeholder: 'CVV'
            },
            postalCode: {
                elementId: 'postal-code',
                placeholder: 'Postal Code'
            },
            callbacks: {
                paymentFormLoaded: function () {
                    console.log("Payment form loaded!");
                },
                paymentFormSubmission: function () {
                    return false;
                },
                cardNonceResponseReceived: function (errors, nonce) {
                    if (errors) {
                        console.log('Errors:');
                        errors.forEach(function (error) {
                            console.log(error.message);
                        });
                        return;
                    }

                    console.log('Received nonce:', nonce);

                    fetch('/process-payment', {
                        method: 'POST',
                        body: JSON.stringify({ nonce: nonce }),
                        headers: { 'Content-Type': 'application/json' }
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log('Payment successful:', data);
                        alert('Payment Successful!');
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                        alert('Payment Failed!');
                    });
                }
            }
        });

        paymentForm.build();

        document.getElementById('nonce-form').addEventListener('submit', function (e) {
            e.preventDefault();
            paymentForm.requestCardNonce();
        });
    </script>

</body>
</html>
