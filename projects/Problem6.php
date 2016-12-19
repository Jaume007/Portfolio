<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8"/>
		<title>Task</title>
	</head>
	<body>
		
		<?php
		echo "<h2>Fuerza bruta</h2>";
		$start = microtime(true); // timer starts
		$numbersChosen = 100;
		
		$sumSquare = 0;
		$squareSum = 0;
		
		for ($i = 1; $i <= $numbersChosen; $i++) {
			$sumSquare = $sumSquare + ($i*$i);
			$squareSum = $squareSum + $i;
		}
		$squareSum = ($squareSum*$squareSum);
		
		echo "<p>The sum of the squares of the first <b>".$numbersChosen."</b> numbers is <b>".$sumSquare."</b></p>";			
		echo "<p>The square of their sums is <b>".$squareSum."</b></p>";
		echo "<p>The difference is ".$squareSum." - ".$sumSquare." = <b>".($squareSum-$sumSquare)."</b></p>";
		
		$end = round((1000*(microtime(true) - $start)),2); // timer ends	
		echo "<p style='margin-top:5%'>Time: $end </p>"; 
		
		// manera inteligente
		echo "<h2>Smart Way</h2>";
		
		$start = microtime(true); // timer starts
		
		$sumSquare = 0;
		$squareSum = 0;

		$sumSquare=($numbersChosen*($numbersChosen+1)*(2*$numbersChosen+1))/6;
		$squareSum = ($numbersChosen*($numbersChosen+1))/2;

		$squareSum = ($squareSum*$squareSum);

		echo "<p>The sum of the squares of the first <b>".$numbersChosen."</b> numbers is <b>".$sumSquare."</b></p>";
		echo "<p>The square of their sums is <b>".$squareSum."</b></p>";
		echo "<p>The difference is ".$squareSum." - ".$sumSquare." = <b>".($squareSum-$sumSquare)."</b></p>";

		$end = round((1000*(microtime(true) - $start)),2); // timer ends	
		echo "<p style='margin-top:5%'>Time: $end </p>"; 
		
		?>
		
		
	</body>

</html>
