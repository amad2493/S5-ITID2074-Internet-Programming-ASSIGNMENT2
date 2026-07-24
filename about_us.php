<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Serenity Yoga Centre</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        h2 {
            text-align: center;
        }

        .about-grid {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin: 30px auto;
            max-width: 1200px;
            padding: 0 20px;
        }

        .about-card {
            background-color: #f4f8f4;
            border: 1px solid #d4ebd4;
            border-radius: 8px;
            padding: 25px;
            flex: 1;
            min-width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.03);
            text-align: center;
        }

        .about-card img {
            width: 80px;
            height: auto;
            margin-bottom: 15px;
        }

        .about-card h2 {
            color: #355e3b;
            margin-bottom: 15px;
            font-size: 1.5em;
        }

        .about-card p {
            font-size: 0.95em;
            color: #444;
            line-height: 1.5;
            text-align: left;
        }

        .instructors-section {
            margin: 40px auto;
            max-width: 1100px;
            padding: 0 20px;
        }

        .instructor-grid {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .instructor-card {
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            padding: 20px;
            width: 280px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .instructor-card img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid #355e3b;
        }

        .instructor-card h3 {
            margin: 10px 0 5px 0;
            color: #355e3b;
        }

        .instructor-card .role {
            font-weight: bold;
            color: #666;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .instructor-card p {
            font-size: 0.9em;
            color: #444;
            line-height: 1.4;
        }
    </style>
</head>

<body>

    <?php include('header.php'); ?>
    <h1 style="color: #355e3b; text-align: center;">About Serenity Yoga Centre</h1>

    <div style="text-align: center; margin-bottom: 20px;">
        <img src="images/about_yoga.jpg" alt="Yoga Meditation" width="60%" style="border-radius: 8px;" />
    </div>

    <div class="about-grid">
        <div class="about-card">
            <img src="images/story.jpg" alt="Our Story" />
            <h2>Our Story</h2>
            <p>Serenity Yoga Centre is a wellness centre dedicated to helping individuals achieve a healthier and more balanced lifestyle through yoga, meditation, and mindful living practices.</p>
            <p>Established with the vision of promoting physical fitness and mental wellbeing, our centre provides a welcoming environment for people of all ages and fitness levels.</p>
        </div>

        <div class="about-card">
            <img src="images/mission.jpg" alt="Our Mission" />
            <h2>Our Mission</h2>
            <p>Our mission is to inspire and support individuals in improving their overall wellbeing through professional yoga instruction, stress management techniques, and a positive community atmosphere.</p>
        </div>

        <div class="about-card">
            <img src="images/vision.jpg" alt="Our Vision" />
            <h2>Our Vision</h2>
            <p>We aim to become one of the leading yoga and wellness centres in Malaysia by providing accessible, high-quality yoga programs that promote healthy living and personal growth.</p>
        </div>
    </div>

    <section class="instructors-section">
        <h2 style="color: #355e3b;">Meet Our Instructors</h2>
        <p style="text-align: center; color: #555;">Our certified and passionate team is here to guide your wellness journey.</p>

        <div class="instructor-grid">
            <div class="instructor-card">
                <img src="images/aisharahman.jpg" alt="Aisha Rahman" />
                <h3>Aisha Rahman</h3>
                <div class="role">Lead Hatha & Vinyasa Instructor</div>
                <p>With over 8 years of experience, Aisha specializes in alignment-based flow and mindful breathing techniques.</p>
            </div>

            <div class="instructor-card">
                <img src="images/davidtan.jpg" alt="David Tan" />
                <h3>David Tan</h3>
                <div class="role">Yin Yoga & Meditation Specialist</div>
                <p>David focuses on restorative practices, stress relief, and deep tissue relaxation for all fitness levels.</p>
            </div>

            <div class="instructor-card">
                <img src="images/mayalin.jpg" alt="Maya Lin" />
                <h3>Maya Lin</h3>
                <div class="role">Power Yoga & Fitness Coach</div>
                <p>Maya brings dynamic energy to build core strength, flexibility, and physical stamina in every session.</p>
            </div>
        </div>
    </section>

</body>

</html>