<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact & Registration - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('header.php'); ?>

    <!-- HERO BANNER (Uses Section 3 of your CSS with contact_bg.jpg) -->
    <header class="contact-hero">
        <div class="hero-text">
            <h1>Contact & Registration</h1>
            <p>We'd love to hear from you. Reach out or join a session today!</p>
        </div>
    </header>

    <!-- MAIN CONTENT (Uses Section 5 of your CSS) -->
    <main class="contact-content">

        <!-- LEFT PANEL: Location, Hours, & Contact Details -->
        <aside class="contact-box">
            <h2>Visit Our Studio</h2>

            <div class="info-item">
                <h3>📍 Location Address</h3>
                <p>Serenity Yoga Centre<br>
                    12, Jalan Wellness 3, Taman Harmony,<br>
                    50480 Kuala Lumpur, Malaysia</p>
            </div>

            <div class="info-item">
                <h3>📞 Phone & WhatsApp</h3>
                <p>General Inquiries: +60 3-8921 4321<br>
                    WhatsApp Direct: +60 12-345 6789</p>
            </div>

            <div class="info-item">
                <h3>✉️ Email Address</h3>
                <p>hello@serenityyoga.com.my<br>
                    support@serenityyoga.com.my</p>
            </div>

            <div class="info-item">
                <h3>🕒 Opening Hours</h3>
                <p><strong>Monday – Friday:</strong> 8:00 AM – 7:00 PM<br>
                    <strong>Saturday – Sunday:</strong> 8:00 AM – 8:00 PM<br>
                    <em>(Closed on selected Public Holidays)</em>
                </p>
            </div>

            <div class="info-item">
                <h3>🌿 Connect With Us</h3>
                <p>Instagram: @serenityyoga.my<br>
                    Facebook: Serenity Yoga MY</p>
            </div>
        </aside>

        <!-- RIGHT PANEL: Registration Form -->
        <section class="form-box">
            <h2>Get Started with Us</h2>
            <p style="text-align: center; color: #666; margin-bottom: 25px;">Fill out the form below to register for a class, sign up for a membership, or send us an inquiry.</p>

            <form id="contactForm" action="process_contact.php" method="POST">

                <div>
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" name="fullName" placeholder="e.g. John Doe" required>
                </div>

                <div>
                    <label for="email">Email Address *</label>
                    <input type="email" id="email" name="email" placeholder="e.g. john@example.com" required>
                </div>

                <div>
                    <label for="phone">Phone Number *</label>
                    <input type="tel" id="phone" name="phone" placeholder="e.g. 0123456789" required>
                </div>

                <!-- Dropdown 1: Preferred Yoga Class -->
                <div>
                    <label for="classSelect">Preferred Yoga Class (Optional)</label>
                    <select id="classSelect" name="classSelect">
                        <option value="">-- Select a Class --</option>
                        <option value="Yoga for Beginners">Yoga for Beginners</option>
                        <option value="Hatha Yoga">Hatha Yoga</option>
                        <option value="Meditation & Breathing Yoga">Meditation & Breathing Yoga</option>
                        <option value="Power Yoga">Power Yoga</option>
                        <option value="Senior Wellness Yoga">Senior Wellness Yoga</option>
                        <option value="Iyengar Yoga">Iyengar Yoga</option>
                    </select>
                </div>

                <!-- Dropdown 2: Membership Plan -->
                <div>
                    <label for="membershipSelect">Membership Plan (Optional)</label>
                    <select id="membershipSelect" name="membershipSelect">
                        <option value="">-- Select a Membership Tier --</option>
                        <option value="Basic Membership">Basic Pass (RM 120/mo)</option>
                        <option value="Unlimited Membership">Unlimited Flow (RM 250/mo)</option>
                        <option value="VIP Membership">VIP Wellness (RM 380/mo)</option>
                    </select>
                </div>

                <div>
                    <label for="message">Message / Additional Notes</label>
                    <textarea id="message" name="message" rows="4" placeholder="Any specific goals or questions for our instructors?"></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit Registration</button>
            </form>
        </section>

    </main>

    <script src="script.js"></script>
</body>

</html>