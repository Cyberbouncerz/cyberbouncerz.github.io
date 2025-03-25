---
layout: page
permalink: /contact/
icon: fas fa-stream
---

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Generate a unique ticket number
    $ticket_number = strtoupper(bin2hex(random_bytes(6))); // Unique 12-character ticket ID

    // Recipient email
    $to = "cyberbouncerz@gmail.com";

    // Subject for the email
    $subject = "New Contact Form Submission - Ticket #$ticket_number";

    // Email message
    $message = "
    <html>
    <head>
        <title>Contact Form Submission</title>
    </head>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Ticket Number:</strong> $ticket_number</p>
        <p><strong>First Name:</strong> $fname</p>
        <p><strong>Last Name:</strong> $lname</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Comment:</strong> $comment</p>
    </body>
    </html>
    ";

    // Headers for the email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
    $headers .= "From: $email" . "\r\n";

    // Send email to cyberbouncerz@gmail.com
    if (mail($to, $subject, $message, $headers)) {
        // Send a confirmation email to the sender
        $sender_subject = "Your Contact Form Submission - Ticket #$ticket_number";
        $sender_message = "
        <html>
        <head>
            <title>Contact Form Confirmation</title>
        </head>
        <body>
            <h2>Thank you for contacting us!</h2>
            <p>Your ticket number is <strong>$ticket_number</strong>.</p>
            <p><strong>Details:</strong></p>
            <p><strong>First Name:</strong> $fname</p>
            <p><strong>Last Name:</strong> $lname</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Comment:</strong> $comment</p>
            <p>We will get back to you shortly!</p>
        </body>
        </html>
        ";

        // Send the confirmation email to the sender
        mail($email, $sender_subject, $sender_message, $headers);

        // Show the success message on the same page
        $success_message = "Thank you for your submission! Your ticket number is <strong>$ticket_number</strong>.";
    } else {
        $error_message = "There was an error with your submission. Please try again later.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h2>Contact Us</h2>

    <?php if (isset($success_message)): ?>
        <p style="color: green;"><?php echo $success_message; ?></p>
    <?php elseif (isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php else: ?>
        <form action="" method="POST">
            <label for="fname">First Name:</label>
            <input type="text" id="fname" name="fname" required><br>
            
            <label for="lname">Last Name:</label>
            <input type="text" id="lname" name="lname" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            
            <label for="comment">Comment:</label><br>
            <textarea id="comment" name="comment" rows="5" required></textarea><br>
            
            <button type="submit">Submit</button>
        </form>
    <?php endif; ?>
</body>
</html>
