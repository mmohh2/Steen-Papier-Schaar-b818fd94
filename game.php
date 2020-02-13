<!DOCTYPE html>
<html>
<head>
	<title>Steen, Papier, Schaar</title>
</head>
<body>
		<h1>Steen Papier Schaar</h1>
		<h2>Speler 1</h2>
		<?php
		$dis = "";
		if(isset($_GET["submit"]))
			$dis = "display: none;";
		echo "<form method='get' style='" . $dis
		. "'><select name='drop'><option>Steen</option><option>Papier</option><option>Schaar</option></select><img src=\"https://i.imgur.com/DHBrHYH.png\" alt=\"PC foto\"><input type='submit' value='submit' name='submit'></form>";
			if (isset($_GET["submit"])) {
				$p1c = $_GET["drop"];
			}
		?>
        <h2>Speler 2</h2>
        <?php
        $dis = "";
        if(!isset($_GET["submit"]) || !isset($p1c))
            $dis = "display: none;";
        echo "<form method='get' action='end.php' style='" . $dis
            . "'><input name='p1c' type='hidden' value=" . $p1c . "><select name='p2c'><option>Steen</option><option>Papier</option><option>Schaar</option></select><img src=\"https://i.imgur.com/DHBrHYH.png\" alt=\"PC foto\"><input type='submit' value='submit' name='submit'>";
        echo "</form>";
        ?>

	
</body>
</html>
