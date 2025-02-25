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
    <link rel="stylesheet" href="styles/contact.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert2 -->
</head>
<body>
    <?= $alertMessage ?> <!-- Display the alert message if exists -->

    <div class="background">
        <div class="container" id="con">
            <div class="screen">
                <div class="screen-header">
                    <div class="screen-header-left">
                        <div class="screen-header-button close"></div>
                        <div class="screen-header-button maximize"></div>
                        <div class="screen-header-button minimize"></div>
                    </div>
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
                        <div class="app-contact">CONTACT INFO : 99803 36484</div>
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
                                    <input type="text" name="message" class="app-form-control" placeholder="Message" required>
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
            <div class="credits">
                <a class="credits-link" href="#" target="_blank">
                    OPTIMUM SYNC
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>