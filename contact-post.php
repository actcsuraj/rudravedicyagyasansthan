<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['e_name']);
    $phone = htmlspecialchars($_POST['e_phone']);
    $email = htmlspecialchars($_POST['e_email']);
    $city = htmlspecialchars($_POST['e_city']);
    $country = htmlspecialchars($_POST['e_country']);
    $message = htmlspecialchars($_POST['e_message']);
    
    $to = "rudravedicyagyasansthan@gmail.com";
    $subject = "Contact form submission";
    
    // Glassmorphism design email content with #f2770a background
    $email_content = "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2770a;
                margin: 0;
                padding: 0;
            }
            .container {
                background-color: rgba(255, 255, 255, 0.3);
                backdrop-filter: blur(10px);
                width: 80%;
                margin: 50px auto;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.2);
                color: #000;
            }
            h2 {
                color: #000;
                text-align: center;
            }
            .content {
                margin: 20px 0;
                font-size: 16px;
                line-height: 1.5;
            }
            .field-label {
                font-weight: bold;
                color: #000;
            }
            .value {
                color: #000;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h2>Contact Form Submission</h2>
            <div class='content'>
                <p><span class='field-label'>Name:</span> <span class='value'>$name</span></p>
                <p><span class='field-label'>Phone:</span> <span class='value'>$phone</span></p>
                <p><span class='field-label'>Email:</span> <span class='value'>$email</span></p>
                <p><span class='field-label'>City:</span> <span class='value'>$city</span></p>
                <p><span class='field-label'>Country:</span> <span class='value'>$country</span></p>
                <p><span class='field-label'>Message:</span> <span class='value'>$message</span></p>
            </div>
        </div>
    </body>
    </html>
    ";

    // print_r($email_content);
    // die;

    // Headers for the email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <'.$email.'>' . "\r\n";
    
    // Send the email
    if(mail($to, $subject, $email_content, $headers)) {
        echo "<script>
                alert('Thank you for contacting us. Your message has been sent.');
                window.location.href = 'contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Sorry, there was an error sending your message. Please try again later.');
                window.location.href = 'contact.php';
              </script>";
    }
}
// ?>
