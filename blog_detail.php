<?php
// Read the article ID from URL parameter safely
$id = isset($_GET['id']) ? $_GET['id'] : '1';

// Basic conditional rendering based on selected article
if ($id === '2') {
    $title = "Post-Yoga Nutrition Guide";
    $category = "Nutrition";
    $content = "Refueling your body after an intense yoga session is essential. Focus on whole foods, adequate hydration, and a healthy balance of complex carbohydrates and protein to restore muscle glycogen and stay energized throughout the day.";
} else if ($id === '3') {
    $title = "How to Overcome Mind Wandering";
    $category = "Mindfulness";
    $content = "Mind wandering during meditation is completely natural. Rather than fighting your thoughts, gently acknowledge them without judgment and bring your awareness back to your anchor point—your breath.";
} else {
    // Default to Article 1
    $title = "5 Morning Breathing Exercises";
    $category = "Mindfulness";
    $content = "Pranayama is the practice of breath control in yoga. Practicing morning breathing exercises like Nadi Shodhana or Kapalabhati boosts blood oxygenation, clears morning brain fog, and sets a calm tone for the day.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?> - Serenity Yoga</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php include('header.php'); ?>

    <main style="max-width: 700px; margin: 40px auto; padding: 30px; background: #ffffff; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
        <span style="color: #2e5a44; font-weight: bold; text-transform: uppercase; font-size: 0.85rem;">
            Category: <?php echo htmlspecialchars($category, ENT_QUOTES, 'UTF-8'); ?>
        </span>

        <h1 style="color: #1e3d2f; margin: 10px 0 20px 0;"><?php echo htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></h1>

        <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 20px;">

        <p style="line-height: 1.8; color: #444; font-size: 1.05rem;">
            <?php echo htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <div style="margin-top: 30px;">
            <a href="blog.php" class="home-button" style="text-decoration: none; display: inline-block;">&larr; Back to Wellness Blog</a>
        </div>
    </main>

</body>

</html>