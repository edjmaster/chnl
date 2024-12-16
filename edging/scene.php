<?php
// Simulated "JSON" Story Data (PHP Array)
$stories = [
    5 => [
        "You decide to rest in the meadow, enjoying the tranquility of nature.",
        "As you relax, you hear whispers in the wind, guiding you towards a hidden path.",
        "Curious, you follow the whispers and discover a secret garden filled with magical creatures.",
        "What will you do next?"
    ],
    // Additional scenes can be added here
];

// Fetch story based on the door number
$door = isset($_GET['door']) && isset($stories[$_GET['door']]) ? $_GET['door'] : 5;
$story = $stories[$door];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Door Adventure - Scene 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">
        <div id="story-container">
            <div id="story-text"><?php echo implode("<br><br>", $story); ?></div>
        </div>
        <div class="choices">
            <a href="index.php?door=1" class="choice-button">Return to the Beginning</a>
            <a href="index.php?door=6" class="choice-button">Explore the Secret Garden</a>
        </div>
    </div>
</body>
</html>