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
    <title>Contact Us - Optimum Sync</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', sans-serif;
        }

        body {
            background-color: #0f0f19;
            color: #e0e0e0;
            overflow-x: hidden;
            line-height: 1.6;
            height:100%;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Contact Hero Section */
        .contact-hero {
            min-height: 40vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            background-color: #0f0f19;
            padding-top: 120px;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, rgba(120, 41, 255, 0.03) 0%, rgba(0, 0, 0, 0) 70%);
        }

        .contact-title {
            position: relative;
            margin-bottom: 40px;
            text-align: center;
        }

        .contact-title h2 {
            font-size: 2.5rem;
            color: #ffffff;
            display: inline-block;
            background: linear-gradient(to right, #ffffff, #b0b0b0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .contact-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 4px;
            background: linear-gradient(to right, #7829ff, #13f1fc);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .contact-title p {
            margin-top: 20px;
            color: #b0b0b0;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Contact Form Section - Styled like VM Cards */
        .contact-section {
            padding: 40px 0 80px;
            position: relative;
        }

        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .contact-form {
            background-color: rgba(25, 25, 35, 0.6);
            border-radius: 16px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .contact-form::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #7829ff, #13f1fc);
            filter: blur(80px);
            opacity: 0.1;
            top: -20px;
            right: -20px;
            z-index: -1;
            transition: all 0.5s ease;
        }

        .contact-form:hover::before {
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            opacity: 0.15;
        }

        .contact-form:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .contact-form h3 {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #ffffff;
        }

        .contact-form h3 svg {
            margin-right: 15px;
            color: #13f1fc;
        }

        .contact-form .form-group {
            margin-bottom: 20px;
        }

        .contact-form .form-control {
            width: 100%;
            background-color: rgba(15, 15, 25, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 12px 15px;
            color: #e0e0e0;
            font-size: 1rem;
            transition: all 0.3s ease;
        }

        .contact-form .form-control:focus {
            outline: none;
            border-color: #7829ff;
            box-shadow: 0 0 0 3px rgba(120, 41, 255, 0.2);
        }

        .contact-form .form-control::placeholder {
            color:rgb(237, 234, 234);
        }

        .contact-form textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }

        .btn-container {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 10px;
        }

        /* .btn {
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        } */

        .btn-reset {
            background-color: rgba(255, 255, 255, 0.1);
            color: #e0e0e0;
        }

        .btn-submit {
            background: linear-gradient(to right, #7829ff, #13f1fc);
            color: #ffffff;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Address Container - Modernized */
        .address-container {
            background-color: rgba(25, 25, 35, 0.6);
            border-radius: 16px;
            padding: 40px;
            position: relative;
            overflow: hidden;
            z-index: 1;
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .address-container::before {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #13f1fc, #7829ff);
            filter: blur(80px);
            opacity: 0.1;
            bottom: -20px;
            left: -20px;
            z-index: -1;
            transition: all 0.5s ease;
        }

        .address-container:hover::before {
            width: 100%;
            height: 100%;
            bottom: 0;
            left: 0;
            opacity: 0.15;
        }

        .address-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .address-container h3 {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: #ffffff;
        }

        .address-container h3 svg {
            margin-right: 15px;
            color: #13f1fc;
        }

        .location-details {
            margin-bottom: 30px;
        }

        .location-details p {
            color: #b0b0b0;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .contact-details {
            margin-top: 20px;
        }

        .contact-details .detail-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            color: #b0b0b0;
        }

        .contact-details .detail-item i {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            color: #13f1fc;
            font-size: 1.1rem;
        }

        .contact-details .detail-item a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-details .detail-item a:hover {
            color: #13f1fc;
        }

        .map-container {
            margin-top: 30px;
            border-radius: 10px;
            overflow: hidden;
            height: 200px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Responsive design */
        @media (max-width: 992px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .contact-hero {
                min-height: 30vh;
            }
        }

        @media (max-width: 768px) {
            .contact-title h2 {
                font-size: 2rem;
            }

            .btn-container {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .contact-form, .address-container {
                padding: 30px 20px;
            }

            .contact-title h2 {
                font-size: 1.8rem;
            }

            .contact-form h3, .address-container h3 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?= $alertMessage ?> <!-- Display the alert message if exists -->

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="contact-title fade-in">
                <h2>Get In Touch</h2>
                <p>We're here to help you optimize your business. Reach out to us for personalized solutions that drive success.</p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-wrapper">
                <!-- Contact Form Card -->
                <div class="contact-form fade-in">
                    <h3>
                        <div style="padding-right:20px;">
                    <i class="fas fa-envelope" style="color:#13f1fc"></i>
                        </div>
                        Send Us a Message
                    </h3>
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control" placeholder="Your Phone Number" required>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="btn-container">
                            <button type="reset" class="btn btn-reset">Reset</button>
                            <button type="submit" class="btn btn-submit">Send Message</button>
                        </div>
                    </form>
                </div>

                <!-- Address Container -->
                <div class="address-container fade-in">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        Our Location
                    </h3>
                    <div class="location-details">
                        <p>#01, 2nd Floor, NIE StartUp and Incubation Center,</p>
                        <p>NIE College South Campus, Mananthavadi Road,</p>
                        <p>Mysuru 570008</p>
                    </div>
                    <div class="contact-details">
                        <div class="detail-item">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+919876543210">+91 98765 43210</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:office@optimumsync.com">office@optimumsync.com</a>
                        </div>
                        <div class="detail-item">
                            <i class="fas fa-clock"></i>
                            <span>Monday - Friday, 10:00 AM - 5:00 PM</span>
                        </div>
                    </div>
                    <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1099.463074642418!2d76.64103181530515!3d12.280019463470031!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf6500023480d5%3A0xcbb924bb227e8d56!2sOptimum%20Sync%20LLP!5e0!3m2!1sen!2sin!4v1740632773933!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            function checkFade() {
                fadeElements.forEach(element => {
                    const elementPosition = element.getBoundingClientRect().top;
                    const screenPosition = window.innerHeight - 100;
                    
                    if (elementPosition < screenPosition) {
                        element.classList.add('active');
                    }
                });
            }
            
            // Initial check
            checkFade();
            
            // Check on scroll
            window.addEventListener('scroll', checkFade);
        });
    </script>

<?php include 'includes/footer.php'; ?>
</body>
</html>