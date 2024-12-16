<?php
// Simulated "JSON" Story Data (PHP Array)
$stories = [
    4 => [
        "You follow the light towards the mountains, feeling a sense of purpose. The path is steep, but you press on.",
        "As you reach the summit, you find a magnificent treasure chest waiting for you.",
        "Inside, you discover not only gold but also a magical artifact that grants you immense power.",
        "With this newfound strength, you can now shape your destiny. What will you do next?"
    ],
    // Additional scenes can be added here
];

// Fetch story based on the door number
$door = isset($_GET['door']) && isset($stories[$_GET['door']]) ? $_GET['door'] : 4;
$story = $stories[$door];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Door Adventure - Scene 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="content">
        <div id="story-container">
            <div id="story-text"><?php echo implode("<br><br>", $story); ?></div>
        </div>
        <div class="choices">
            <a href="index.php?door=1" class="choice-button">Return to the Beginning</a>
            <a href="index.php?door=5" class="choice-button">Use the Artifact</a>
        </div>
    </div>
</body>
</html>