<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 3.3</title>
</head>
<body>
    <h1>Steen Papier Schaar</h1>
    <hr>
    <?php
        $computer = rand(1,3);
        if ($computer == 1) {
            $pc2 = "Steen";
        }
        if ($computer == 2) {
            $pc2 = "Papier";
        }
        if ($computer == 3) {
            $pc2 = "Schaar";
        }
        $speler1 = $_GET["drop"];
        $speler2 = $pc2;
        echo "<h1>Speler 1 koos " . $speler1 . ".</h1>";
        echo "<h1>Speler 2 koos " . $speler2 . ".</h1>";
        if ($speler1 == "Steen") {
            if ($speler2 == "Steen") {
                echo "Gelijkspel";
            }
            if ($speler2 == "Papier") {
                echo "Speler 2 wint";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 1 wint";
            }
        }
        if ($speler1 == "Papier") {
            if ($speler2 == "Steen") {
                echo "Speler 1 wint";
            }
            if ($speler2 == "Papier") {
                echo "Gelijkspel";
            }
            if ($speler2 == "Schaar") {
                echo "Speler 2 wint";
            }
        }
        if ($speler1 == "Schaar") {
            if ($speler2 == "Steen") {
                echo "Speler 2 wint";
            }
            if ($speler2 == "Papier") {
                echo "Speler 1 wint";
            }
            if ($speler2 == "Schaar") {
                echo "Gelijkspel";
            }
        }
    ?>
</body>
</html>
