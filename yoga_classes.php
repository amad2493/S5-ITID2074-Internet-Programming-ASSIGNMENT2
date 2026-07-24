<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Classes - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('header.php'); ?>

    <h1>Our Yoga Classes</h1>

    <p style="text-align: center; max-width: 800px; margin: 0 auto 30px auto;">
        Serenity Yoga Centre offers a variety of yoga programs designed for different fitness levels and personal goals.
    </p>

    <!-- Yoga Classes Grid -->
    <div class="class-container">

        <div class="class-card">
            <img src="images/beginner_yoga.jpg" alt="Beginner Yoga">
            <h2>Yoga for Beginners</h2>
            <p>
                Perfect for individuals who are new to yoga. This class introduces basic poses, breathing techniques and relaxation methods in a comfortable and supportive environment.
            </p>
            <a href="contact_us.php?plan=Yoga for Beginners" class="home-button">Book Class</a>
        </div>

        <div class="class-card">
            <img src="images/hatha_yoga.jpg" alt="Hatha Yoga">
            <h2>Hatha Yoga</h2>
            <p>
                A traditional style of yoga that focuses on physical postures, breathing control and mindfulness. Suitable for improving flexibility and overall wellbeing.
            </p>
            <a href="contact_us.php?plan=Hatha Yoga" class="home-button">Book Class</a>
        </div>

        <div class="class-card">
            <img src="images/meditation_yoga.JPEG" alt="Meditation Yoga">
            <h2>Meditation Yoga</h2>
            <p>
                A calming yoga class that combines breathing exercises, meditation and relaxation techniques to reduce stress and improve mental wellness.
            </p>
            <a href="contact_us.php?plan=Meditation & Breathing Yoga" class="home-button">Book Class</a>
        </div>

        <div class="class-card">
            <img src="images/power_yoga.webp" alt="Power Yoga">
            <h2>Power Yoga</h2>
            <p>
                A more energetic and challenging yoga class designed to build strength, endurance, confidence and improve overall fitness.
            </p>
            <a href="contact_us.php?plan=Power Yoga" class="home-button">Book Class</a>
        </div>

        <div class="class-card">
            <img src="images/senior_yoga.jpg" alt="Senior Yoga">
            <h2>Senior Wellness Yoga</h2>
            <p>
                Specially designed for older adults to improve mobility, balance, flexibility and overall physical health in a safe environment.
            </p>
            <a href="contact_us.php?plan=Senior Wellness Yoga" class="home-button">Book Class</a>
        </div>

        <div class="class-card">
            <img src="images/iyengar.jpg" alt="Iyengar Yoga">
            <h2>Iyengar Yoga</h2>
            <p>
                A precise yoga practice that emphasizes correct body alignment using props to improve strength, balance and flexibility.
            </p>
            <a href="contact_us.php?plan=Iyengar Yoga" class="home-button">Book Class</a>
        </div>

    </div>

    <!-- Benefits Section -->
    <section>
        <h2>Benefits of Joining Our Classes</h2>
        <img src="images/benefits_icon.jpg" alt="Benefits Icon" width="150" style="margin-bottom: 15px;">
        <ul style="text-align: left; display: inline-block;">
            <li>Improve flexibility and posture</li>
            <li>Reduce stress and anxiety</li>
            <li>Increase strength and balance</li>
            <li>Promote better sleep quality</li>
            <li>Enhance overall wellbeing</li>
        </ul>
    </section>

    <script src="script.js"></script>
</body>

</html>