<?php

/**
 * Server-Side Form Processor
 * Sanitizes and securely displays registration details.
 */

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitize user inputs against XSS and injection
    $fullName         = isset($_POST['fullName']) ? htmlspecialchars(trim($_POST['fullName']), ENT_QUOTES, 'UTF-8') : '';
    $email            = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8') : '';
    $phone            = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone']), ENT_QUOTES, 'UTF-8') : '';

    // Separate handling for Preferred Class and Membership Tier
    $classSelect      = (!empty($_POST['classSelect'])) ? htmlspecialchars(trim($_POST['classSelect']), ENT_QUOTES, 'UTF-8') : 'None Selected';
    $membershipSelect = (!empty($_POST['membershipSelect'])) ? htmlspecialchars(trim($_POST['membershipSelect']), ENT_QUOTES, 'UTF-8') : 'None Selected';

    $message          = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message']), ENT_QUOTES, 'UTF-8') : '';
} else {
    // Redirect back to contact form if accessed directly
    header("Location: contact_us.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Received - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="thankyou-page">

    <?php include('header.php'); ?>

    <!-- HERO BANNER WITH thank_you_bg.jpg -->
    <header class="thankyou-hero">
        <div class="hero-text">
            <h1>Registration Successful!</h1>
        </div>
    </header>

    <!-- MAIN SUMMARY CARD -->
    <main class="thankyou-section">
        <p>Thank you, <strong><?php echo $fullName; ?></strong>. We have received your submission and will get in touch shortly.</p>

        <!-- Summary Box -->
        <div style="background-color: #f4f7f5; padding: 25px; border-radius: 12px; text-align: left; margin: 25px 0; line-height: 1.8;">
            <p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
            <p><strong>Email Address:</strong> <?php echo $email; ?></p>
            <p><strong>Phone Number:</strong> <?php echo $phone; ?></p>
            <hr style="border: 0; border-top: 1px solid #ddd; margin: 15px 0;">
            <p><strong>Selected Class:</strong> <?php echo $classSelect; ?></p>
            <p><strong>Selected Membership Plan:</strong> <?php echo $membershipSelect; ?></p>
            <p><strong>Message / Notes:</strong> <?php echo !empty($message) ? nl2br($message) : 'None'; ?></p>
        </div>

        <a href="contact_us.php" class="home-button">Back to Contact Page</a>
    </main>

</body>

</html>