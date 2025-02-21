<?php
// footer.php
?>


<footer style="background-color: #111; color: white; padding: 20px 0; text-align: center;">
    <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; padding: 0 20px;">
        
        <!-- Left Section: Logo -->
        <div style="flex: 1; text-align: left;">
            <img src="logo.png" alt="Company Logo" style="height: 60px; margin-bottom: 10px;">
            <p style="color: #aaa; font-size: 14px;">&copy; <?php echo date('Y'); ?> Your Company. All Rights Reserved.</p>
        </div>

        <!-- Middle Section: Navigation & Contact -->
        <div style="flex: 1; text-align: center;">
            <h2 style="font-size: 18px; margin-bottom: 10px;">Quick Links</h2>
            <a href="index.php" style="color: #aaa; text-decoration: none; display: block; margin: 5px 0;">Home</a>
            <a href="about.php" style="color: #aaa; text-decoration: none; display: block; margin: 5px 0;">About</a>
            <a href="contact.php" style="color: #aaa; text-decoration: none; display: block; margin: 5px 0;">Contact Us</a>

            <h2 style="font-size: 18px; margin-top: 15px;">Contact</h2>
            <p style="color: #aaa; font-size: 14px;">📍 Your Location</p>
            <p style="color: #aaa; font-size: 14px;">📧 your-email@gmail.com</p>
            <p style="color: #aaa; font-size: 14px;">📞 +123 456 7890</p>
        </div>

        <!-- Right Section: Social Media -->
        <div style="flex: 1; text-align: right;">
            <h2 style="font-size: 18px; margin-bottom: 10px;">Follow Us</h2>
            <div>
                <a href="#" style="color: #aaa; font-size: 20px; margin: 0 10px;">X</a>
                <a href="#" style="color: #aaa; font-size: 20px; margin: 0 10px;">Instagram</a>
                <a href="#" style="color: #aaa; font-size: 20px; margin: 0 10px;">Facebook</a>
                <a href="#" style="color: #aaa; font-size: 20px; margin: 0 10px;">LinkedIn</a>
            </div>
        </div>

    </div>
</footer>
