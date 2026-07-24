<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Your Perfect Yoga Class - Serenity Yoga</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <?php include('header.php'); ?>

    <section class="form-box" style="width: 80%; max-width: 800px; margin: 40px auto">
        <h2>Find Your Perfect Yoga Class</h2>
        <p style="text-align: center; margin-bottom: 20px;">Answer a few simple questions to discover which yoga practice suits your current fitness goals!</p>

        <form id="quizForm" onsubmit="return false;">
            <label for="goal">What is your primary goal?</label>
            <select id="goal" required>
                <option value="">-- Select Goal --</option>
                <option value="relax">Stress Relief & Relaxation</option>
                <option value="strength">Building Strength & Endurance</option>
                <option value="flexibility">Flexibility & Posture</option>
                <option value="senior">Gentle Movement & Mobility</option>
            </select>

            <label for="experience">What is your experience level?</label>
            <select id="experience" required>
                <option value="">-- Select Level --</option>
                <option value="beginner">Complete Beginner</option>
                <option value="intermediate">Intermediate / Active</option>
            </select>

            <button type="button" onclick="calculateQuizResult()" class="btn-submit">Find My Match</button>
        </form>

        <div id="quizResult" class="result-box" style="display: none; margin-top: 25px; padding: 20px; background: #e8f5e9; border-radius: 10px">
            <h3 id="recommendedClassTitle" style="color: #355e3b; margin-top: 0;"></h3>
            <p id="recommendedClassDesc" style="color: #333; margin-bottom: 15px;"></p>
            <a id="bookClassBtn" href="contact_us.php" class="home-button" style="text-decoration: none; display: inline-block;">Book This Class Now</a>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>