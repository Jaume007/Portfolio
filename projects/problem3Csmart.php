<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Problem 3 Brute Forçe and Smart Way</title>
</head>
<body>
<?php
$start = microtime(true); // timer starts
$num=5001;
$max=0;
function esprimo($div)
{

    $top=(int)sqrt($div);
    for ($i = $top; $i >1 ; $i--) {
        $resultado = $div % $i;
        if ($resultado == 0) {
            return false;
        }
    }
    return true;
}



for ($div=2;$div<$num;$div++) {
    $resul = $num % $div;
    if ($resul == 0) {//this condition is true then number is divisible
        if (esprimo($div) == true) {
            if ($div > $max) {
                $max = $div;
            }
        }
    }
}
echo "<h2>Brute forçe</h2>";
echo "<h3>The largest Prime Factor is: " . $max . "</h3>";
echo "<h3>Runtime: ".round(1000*(microtime(true)-$start),2)." miliseconds</h3>";


// Smart way
$start = microtime(true); // timer starts

$max=0;


$limit=(int)(sqrt($num));
for ($div=2;$div<$limit;$div++) {
    $resul = $num % $div;
    if ($resul == 0) {/*this condition is true then number is divisible */
        if (esprimo($div) == true) {
            if ($div > $max) {
                $max = $div;
            }
        }
        if (esprimo($num/$div) == true) {
            if ($num/$div > $max) {
                $max = $num/$div;
            }
        }
    }
}
echo "<h2>Smart Way</h2>";
echo "<h3>The largest Prime Factor is: " . $max . "</h3>";
echo "<h3>Runtime: ".round(1000*(microtime(true)-$start),2)." miliseconds</h3>";
?>
</body>
</html>
