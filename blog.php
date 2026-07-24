<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wellness Blog - Serenity Yoga</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <?php include('header.php'); ?>

    <!-- Blog Header Section -->
    <section class="blog-hero" style="text-align: center; padding: 40px 20px;">
        <h1 style="color: #1e3d2f; font-size: 2.2rem; margin-bottom: 10px;">Serenity Wellness Blog</h1>
        <p style="color: #555; font-size: 1.1rem;">Tips, guides, and insights to support your mindful journey.</p>
    </section>

    <!-- Blog Category Filter Buttons -->
    <div style="text-align: center; margin-bottom: 30px;">
        <button onclick="filterBlog('all')" class="btn-filter">All</button>
        <button onclick="filterBlog('mindfulness')" class="btn-filter">Mindfulness</button>
        <button onclick="filterBlog('nutrition')" class="btn-filter">Nutrition</button>
    </div>

    <!-- Blog Cards Grid Container -->
    <div class="class-container">

        <!-- Article 1 -->
        <div class="class-card blog-post category-mindfulness">
            <h2>5 Morning Breathing Exercises</h2>
            <p>Start your day with clarity and energy using simple Pranayama techniques.</p>
            <a href="blog_detail.php?id=1" class="home-button">Read Article</a>
        </div>

        <!-- Article 2 -->
        <div class="class-card blog-post category-nutrition">
            <h2>Post-Yoga Nutrition Guide</h2>
            <p>Discover the best whole foods to refuel your body after an intense session.</p>
            <a href="blog_detail.php?id=2" class="home-button">Read Article</a>
        </div>

        <!-- Article 3 -->
        <div class="class-card blog-post category-mindfulness">
            <h2>How to Overcome Mind Wandering</h2>
            <p>Simple techniques to bring your awareness back during meditation practice.</p>
            <a href="blog_detail.php?id=3" class="home-button">Read Article</a>
        </div>

    </div>

    <script src="script.js"></script>
</body>

</html>