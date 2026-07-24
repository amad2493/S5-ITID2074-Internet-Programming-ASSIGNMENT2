<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Plans - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('header.php'); ?>

    <section class="blog-hero" style="text-align: center; padding: 40px 20px;">
        <h1 style="color: #1e3d2f; font-size: 2.2rem; margin-bottom: 10px;">Membership Plans</h1>
        <p style="color: #555; font-size: 1.1rem;">Choose a plan that fits your lifestyle. Save up to 20% with annual subscriptions!</p>
    </section>

    <div style="text-align: center; margin-bottom: 30px;">
        <button id="btnMonthly" onclick="toggleBilling('monthly')" class="btn-filter active">Monthly Billing</button>
        <button id="btnAnnual" onclick="toggleBilling('annual')" class="btn-filter">Annual Billing (20% OFF)</button>
    </div>

    <div class="class-container">

        <div class="class-card" style="text-align: center;">
            <h2>Basic Pass</h2>
            <h3 id="priceBasic" style="color: #2e5a44; margin: 15px 0;">RM 120 / month</h3>
            <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; line-height: 2;">
                <li>✓ 4 Yoga Classes per Month</li>
                <li>✓ Access to Beginner Sessions</li>
                <li>✓ Locker Facility Access</li>
                <li>✓ Standard Mat Access</li>
            </ul>
            <a href="contact_us.php?plan=Basic Membership" class="home-button" style="text-decoration: none; display: inline-block;">Get Started</a>
        </div>

        <div class="class-card" style="text-align: center; border: 2px solid #2e5a44; position: relative;">
            <div style="background: #2e5a44; color: white; padding: 4px 12px; font-size: 0.85rem; font-weight: bold; border-radius: 12px; display: inline-block; margin-bottom: 10px;">MOST POPULAR</div>
            <h2>Unlimited Flow</h2>
            <h3 id="priceUnlimited" style="color: #2e5a44; margin: 15px 0;">RM 250 / month</h3>
            <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; line-height: 2;">
                <li>✓ <strong>Unlimited</strong> Yoga Classes</li>
                <li>✓ Free Premium Mat Rental</li>
                <li>✓ Locker Facility Access</li>
                <li>✓ 1 Free Guest Pass / Month</li>
            </ul>
            <a href="contact_us.php?plan=Unlimited Membership" class="home-button" style="text-decoration: none; display: inline-block;">Get Unlimited</a>
        </div>

        <div class="class-card" style="text-align: center;">
            <h2>VIP Wellness</h2>
            <h3 id="priceVIP" style="color: #2e5a44; margin: 15px 0;">RM 380 / month</h3>
            <ul style="list-style: none; padding: 0; margin: 20px 0; text-align: left; line-height: 2;">
                <li>✓ <strong>Unlimited</strong> Yoga & Meditation</li>
                <li>✓ 1-on-1 Monthly Instructor Consultation</li>
                <li>✓ Free Welcome Merch & Towel</li>
                <li>✓ VIP Locker & Priority Booking</li>
            </ul>
            <a href="contact_us.php?plan=VIP Membership" class="home-button" style="text-decoration: none; display: inline-block;">Join VIP</a>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>