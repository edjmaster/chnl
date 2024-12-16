<?php
// Simulated "JSON" Story Data (PHP Array)
$stories = [
    1 => [
        "As you step through the first door, a bright light blinds you. You shield your eyes and take a cautious step forward.",
        "You find yourself in a peaceful meadow with golden flowers swaying gently in the breeze. The air is filled with the sweet scent of blooming flora.",
        "A voice echoes from above: 'You are destined for greatness, seek the treasure beyond the mountains.'",
        "You notice a path leading towards the mountains in the distance, but a cozy spot under a large tree beckons you to rest.",
        "Will you follow the light towards the mountains or rest in the meadow?"
    ],
    2 => [
        "The second door creaks open to reveal a dark cave lit by flickering torches. The air is damp and heavy with the scent of earth.",
        "You hear the roar of a dragon deep within, and the ground shakes beneath you, sending small rocks tumbling.",
        "A chest sits nearby, glimmering with gold and jewels, but the roar grows louder, echoing off the cave walls. Danger is close!",
        "Do you grab the treasure and risk awakening the dragon, or do you run for safety back through the door?"
    ],
    3 => [
        "As you step through the third door, an icy wind greets you, chilling you to the bone. You shiver as you look around.",
        "You find yourself in a frozen cavern illuminated by glowing crystals that cast eerie shadows on the walls.",
        "An ancient guardian appears, blocking your path. 'Only those with courage may pass,' it booms, its voice echoing in the cold air.",
        "You notice a shimmering sword embedded in the ice nearby, and a narrow path leading deeper into the cavern.",
        "Do you challenge the guardian to prove your courage or attempt to retrieve the sword for protection?"
    ],
    4 => [
        "You follow the light, feeling a surge of energy as you approach the mountains. The path is steep but invigorating.",
        "As you climb, the air grows thinner, and the landscape transforms into a breathtaking view of valleys below.",
        "Suddenly, you encounter a wise old sage who offers you a choice: 'Take the path of wisdom or the path of strength.'",
        "Will you seek knowledge from the sage or rely on your physical prowess to continue your journey?"
    ],
    5 => [
        "You grab the treasure, feeling the weight of gold and jewels in your hands. The roar of the dragon intensifies, shaking the cave.",
        "As you turn to escape, the dragon awakens, its fiery breath illuminating the darkness. You must act quickly!",
        "Do you try to negotiate with the dragon or make a run for the exit, hoping to escape with your newfound riches?"
    ],
    6 => [
        "You stand tall and challenge the guardian, declaring your courage. The guardian's eyes narrow, impressed by your bravery.",
        "It steps aside, allowing you to pass, but warns, 'The path ahead is fraught with peril. Choose wisely.'",
        "You venture deeper into the cavern, where you find a shimmering portal that leads to unknown realms.",
        "Will you step through the portal or return to face the guardian once more?"
    ],
    7 => [
        "You carefully approach the sword, feeling its power emanating from the ice. With a mighty pull, you free it from its frozen prison.",
        "The guardian watches, nodding in approval. 'With this sword, you may face any challenge that lies ahead.'",
        "Armed with the sword, you now have the choice to explore the cavern further or return to the surface.",
        "Do you delve deeper into the mysteries of the cavern or make your way back to safety?"
    ],
    8 => [
        "You take a deep breath and attempt to negotiate with the dragon, explaining your intentions and the treasure's significance.",
        "The dragon pauses, intrigued by your words. 'Perhaps there is a way for us to coexist,' it rumbles, its fiery breath cooling.",
        "You propose a deal: share the treasure with the dragon in exchange for safe passage and knowledge of the land.",
        "Will the dragon accept your offer, or will it see you as a threat and unleash its fury?"
    ],
    9 => [
        "With a heart full of courage, you step through the shimmering portal. A rush of energy envelops you, transporting you to a vibrant new world.",
        "You find yourself in a lush forest filled with strange creatures and magical plants. The air is alive with the sounds of nature.",
        "A mystical being approaches you, offering guidance. 'Welcome, traveler. Your journey has just begun. What do you seek?'",
        "Do you seek adventure, knowledge, or perhaps a way back home?"
    ],
    10 => [
        "You decide to explore the cavern further, drawn by the mysteries that lie within. The air grows colder as you venture deeper.",
        "You discover ancient carvings on the walls, telling tales of heroes and battles long forgotten. A sense of destiny fills the air.",
        "Suddenly, you hear whispers echoing through the darkness, beckoning you to uncover the secrets hidden in the shadows.",
        "Will you follow the whispers or turn back to the safety of the entrance?"
    ],
];

// Background images for each door
$backgrounds = [
    1 => 'url("22.png")',
    2 => 'url("drak.png")',
    3 => 'url("11.png")',
    4 => 'url("path/to/mountains.jpg")',
    5 => 'url("path/to/dragon_cave.jpg")',
    6 => 'url("path/to/portal.jpg")',
    7 => 'url("path/to/sword.jpg")',
    8 => 'url("path/to/dragon_negotiation.jpg")',
    9 => 'url("path/to/lush_forest.jpg")',
    10 => 'url("path/to/ancient_cavern.jpg")',
];

// Fetch story based on the door number
$door = isset($_GET['door']) && isset($stories[$_GET['door']]) ? $_GET['door'] : 1;
$story = $stories[$door];
$background = $backgrounds[$door];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Door Adventure - Story</title>
    <style>
        body {
            background: linear-gradient(to bottom, #1a1a1a, #4d4d4d);
            color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            text-align: center;
            padding: 20px;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-image: <?php echo $background; ?>;
            background-size: cover;
            background-position: center;
        }

        #story-container {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            max-width: 600px;
            margin: auto;
        }

        #story-text {
            font-size: 1.2em;
            line-height: 1.5em;
            margin-bottom: 20px;
        }

        .choices {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .choice-button {
            background: #ffcc00;
            color: #1a1a1a;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
            text-decoration: none;
        }

        .choice-button:hover {
            background: #e6b800;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #story-text {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
    <script>
        // JavaScript for the typing effect
        document.addEventListener("DOMContentLoaded", function() {
            const storyText = <?php echo json_encode($story); ?>;
            let index = 0;
            const storyContainer = document.getElementById("story-text");

            function displayText() {
                if (index < storyText.length) {
                    const text = storyText[index];
                    let i = 0;
                    const interval = setInterval(() => {
                        if (i < text.length) {
                            storyContainer.innerHTML += text.charAt(i);
                            i++;
                        } else {
                            clearInterval(interval);
                            index++;
                            storyContainer.innerHTML += "<br><br>";
                            setTimeout(displayText, 1000); // Pause before the next paragraph
                        }
                    }, 50);
                }
            }
            displayText();
        });
    </script>
</head>
<body>
    <div class="content">
        <div id="story-container">
            <div id="story-text"></div>
        </div>
        <div class="choices">
            <?php if ($door == 1) { ?>
                <a href="index.php?door=2" class="choice-button">Follow the Light</a>
                <a href="index.php?door=3" class="choice-button">Rest in the Meadow</a>
            <?php } elseif ($door == 2) { ?>
                <a href="index.php?door=5" class="choice-button">Grab the Treasure</a>
                <a href="index.php?door=6" class="choice-button">Run for Safety</a>
            <?php } elseif ($door == 3) { ?>
                <a href="index.php?door=7" class="choice-button">Challenge the Guardian</a>
                <a href="index.php?door=8" class="choice-button">Retrieve the Sword</a>
            <?php } elseif ($door == 4) { ?>
                <a href="index.php?door=9" class="choice-button">Seek Knowledge</a>
                <a href="index.php?door=10" class="choice-button">Rely on Strength</a>
            <?php } elseif ($door == 5) { ?>
                <a href="index.php?door=8" class="choice-button">Negotiate with the Dragon</a>
                <a href="index.php?door=6" class="choice-button">Run for the Exit</a>
            <?php } elseif ($door == 6) { ?>
                <a href="index.php?door=9" class="choice-button">Step through the Portal</a>
                <a href="index.php?door=10" class="choice-button">Return to the Guardian</a>
            <?php } elseif ($door == 7) { ?>
                <a href="index.php?door=9" class="choice-button">Explore the Cavern</a>
                <a href="index.php?door=10" class="choice-button">Return to the Surface</a>
            <?php } elseif ($door == 8) { ?>
                <a href="index.php?door=11" class="choice-button">Accept the Dragon's Offer</a>
                <a href="index.php?door=12" class="choice-button">Flee from the Dragon</a>
            <?php } elseif ($door == 9) { ?>
                <a href="index.php?door=13" class="choice-button">Seek Adventure</a>
                <a href="index.php?door=14" class="choice-button">Return Home</a>
            <?php } elseif ($door == 10) { ?>
                <a href="index.php?door=15" class="choice-button">Follow the Whispers</a>
                <a href="index.php?door=16" class="choice-button">Turn Back</a>
            <?php } ?>
        </div>
    </div>
</body>
</html>