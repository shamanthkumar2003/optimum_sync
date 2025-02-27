<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust path if needed

$alertMessage = ""; // Variable to store JavaScript alert message

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Server Settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'odp9875@gmail.com'; // Your Gmail
        $mail->Password = 'nzro zbru wvoh vhiu'; // Your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Sender & Recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('odp9875@gmail.com'); // Receiver's email

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h2>Contact Form Submission</h2>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Message:</strong> $message</p>
        ";

        // Send Email
        $mail->send();
        $alertMessage = "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent!',
                    text: 'Your message has been sent successfully.',
                    confirmButtonText: 'OK'
                });
            });
        </script>";
    } catch (Exception $e) {
        $alertMessage = "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Message Not Sent',
                    text: 'Error: {$mail->ErrorInfo}',
                    confirmButtonText: 'Try Again'
                });
            });
        </script>";
    }
}
?>
<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0f0f19;
            color: #fff;
            line-height: 1.6;
            height:100%;
        }

        .background {
            padding-top: 140px;

        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        /* Main Contact Form - Smaller Size */
        .screen {
            background: #1a1a2e;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 255, 0.15);
            overflow: hidden;
            margin-bottom: 30px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .screen-header {
            display: flex;
            justify-content: flex-end;
            padding: 12px 20px;
            background: #16213e;
        }

        .screen-header-right {
            display: flex;
        }

        .screen-body {
            display: flex;
            flex-wrap: wrap;
        }

        .screen-body-item {
            flex: 1;
            padding: 25px;
            min-width: 300px;
        }

        .app-title {
            margin-bottom: 25px;
        }

        .contact-color span {
            color: #4681f4;
            font-size: 24px;
            font-weight: 700;
        }

        .us-color span {
            color: #fff;
            font-size: 24px;
            font-weight: 700;
        }

        .app-form-group {
            margin-bottom: 15px;
        }

        .app-form-control {
            width: 100%;
            padding: 10px 15px;
            background: #272741;
            border: none;
            border-radius: 6px;
            color: #fff;
            font-size: 14px;
            transition: all 0.3s;
        }

        .app-form-control:focus {
            background: #323259;
            outline: none;
            box-shadow: 0 0 8px rgba(70, 129, 244, 0.4);
        }

        .app-form-control::placeholder {
            color: #7c7c8a;
        }

        .message .app-form-control {
            min-height: 100px;
            resize: none;
        }

        .buttons {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .app-form-button {
            padding: 8px 20px;
            border: none;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .app-form-button[type="reset"] {
            background: #272741;
            color: #fff;
        }

        .app-form-button[type="submit"] {
            background: #4681f4;
            color: #fff;
        }

        .app-form-button:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        /* Contact Cards - Smaller Size */
        .contact-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            justify-content: center;
        }

        .contact-card {
            width: 240px;
            background: #1a1a2e;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 255, 0.15);
            transition: transform 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-3px);
        }

        .contact-card i {
            font-size: 30px;
            color: #4681f4;
            margin-bottom: 12px;
        }

        .contact-card h3 {
            font-size: 16px;
            margin-bottom: 12px;
            color: #fff;
        }

        .contact-card p {
            color: #ddd;
            margin-bottom: 15px;
            font-size: 13px;
        }

        .contact-btn {
            display: inline-block;
            background: #4681f4;
            color: #fff;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 13px;
            transition: all 0.3s;
        }

        .contact-btn:hover {
            background: #3a6fd3;
        }

        /* Map Section with Address Text on Left */
        .map-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 30px;
            background: #1a1a2e;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 255, 0.15);
        }

        .address-container {
            flex: 1;
            min-width: 300px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .address-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #4681f4;
        }

        .address-content {
            color: #ddd;
            margin-bottom: 20px;
        }

        .address-content p {
            margin-bottom: 10px;
            font-size: 14px;
        }

        .contact-info {
            margin-top: 20px;
        }

        .contact-info p {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .contact-info i {
            color: #4681f4;
            margin-right: 10px;
            font-size: 16px;
            width: 20px;
        }

        .contact-info a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: #4681f4;
        }

        .map-container {
            flex: 2;
            min-width: 300px;
            height: 350px;
        }

        .map-container iframe {
            border: none;
            height: 100%;
            width: 100%;
        }


        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .screen-body {
                flex-direction: column;
            }

            .screen-body-item {
                padding: 20px;
                min-width: auto;
            }

            .contact-cards {
                flex-direction: row;
                justify-content: center;
            }

            .map-section {
                flex-direction: column;
            }

            .map-container {
                height: 250px;
            }
        }

        @media screen and (max-width: 480px) {
            .buttons {
                flex-direction: column;
            }

            .app-form-button {
                width: 100%;
                margin-bottom: 10px;
            }

            .contact-cards {
                flex-direction: column;
                align-items: center;
            }

            .contact-card {
                width: 100%;
                max-width: 280px;
            }
        }
    </style>
</head>
<body>
    <?= $alertMessage ?> <!-- Display the alert message if exists -->
    
    <div class="background">
        <div class="container">
            <!-- Contact Form -->
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-right">
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                        <div class="screen-header-ellipsis"></div>
                    </div>
                </div>
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <div class="contact-color"><span>CONTACT</span></div>
                            <div class="us-color"><span>US</span></div>
                        </div>
                        <p style="color:#ddd; font-size:14px; margin-bottom:20px;">
                            We'd love to hear from you. Fill out the form and we'll get back to you as soon as possible.
                        </p>
                    </div>
                    <div class="screen-body-item">
                        <form action="contact.php" method="POST">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input type="text" name="name" class="app-form-control" placeholder="Name" required>
                                </div>
                                <div class="app-form-group">
                                    <input type="email" name="email" class="app-form-control" placeholder="Email" required>
                                </div>
                                <div class="app-form-group">
                                    <input type="tel" name="phone" class="app-form-control" placeholder="Contact No" required>
                                </div>
                                <div class="app-form-group message">
                                    <textarea name="message" class="app-form-control" placeholder="Message" required></textarea>
                                </div>
                                <div class="app-form-group buttons">
                                    <button type="reset" class="app-form-button">CANCEL</button>
                                    <button type="submit" class="app-form-button">SEND</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Cards -->
            <div class="contact-cards">
                <!-- Call Card -->
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h3>Call Us</h3>
                    <p>Available Mon-Fri, 9AM-6PM</p>
                    <a href="tel:+919876543210" class="contact-btn">+91 98765 43210</a>
                </div>
                
                <!-- Email Card -->
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email Us</h3>
                    <p>Response within 24 hours</p>
                    <a href="mailto:office@optimumsync.com" class="contact-btn">Get in Touch</a>
                </div>
            </div>

            <!-- Map Section with Address on Left -->
            <div class="map-section">
                <div class="address-container">
                    <h2 class="address-title">Our Location</h2>
                    <div class="address-content">
                        <p>#01, 2nd Floor, NIE StartUp and Incubation Center,</p>
                        <p>NIE College South Campus, Mananthavadi Road,</p>
                        <p>Mysuru 570008</p>
                    </div>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> <a href="tel:+919876543210">+91 98765 43210</a></p>
                        <p><i class="fas fa-envelope"></i> <a href="mailto:office@optimumsync.com">office@optimumsync.com</a></p>
                        <p><i class="fas fa-clock"></i> Monday - Friday, 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.2485330313286!2d76.63139731482007!3d12.293685991293144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7b02bfffffc7%3A0xfbaeffc0b95f3cd8!2sThe%20National%20Institute%20of%20Engineering!5e0!3m2!1sen!2sin!4v1676953408128!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

<?php include 'includes/footer.php'; ?>
</body>
</html>