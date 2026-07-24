<?php
session_start();
$data = $_SESSION['registration_data'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="thankyou-page">

    <?php include('header.php'); ?>

    <header class="thankyou-hero">
        <div class="hero-text">
            <h1>Thank You!</h1>
        </div>
    </header>

    <section class="thankyou-section">

        <?php if ($data): ?>
            <p style="font-size: 22px;">Thank you, <strong><?php echo htmlspecialchars($data['fullName'] ?? '', ENT_QUOTES, 'UTF-8'); ?></strong>!</p>
            <p>Your registration for <strong><?php echo htmlspecialchars($data['yogaClass'] ?? '', ENT_QUOTES, 'UTF-8'); ?></strong> has been received.</p>
            <p>We look forward to seeing you on <strong><?php echo htmlspecialchars($data['date'] ?? '', ENT_QUOTES, 'UTF-8'); ?></strong> at <strong><?php echo htmlspecialchars($data['time'] ?? '', ENT_QUOTES, 'UTF-8'); ?></strong>.</p>
            <p>A confirmation details email has been sent to <em><?php echo htmlspecialchars($data['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?></em>.</p>
        <?php else: ?>
            <p style="font-size: 22px;">Your yoga class registration has been successfully submitted.</p>
            <p>Our team will contact you shortly to confirm your preferred class and schedule.</p>
        <?php endif; ?>

        <br>
        <a href="index.php" class="home-button">Return to Home</a>
    </section>

</body>

</html>