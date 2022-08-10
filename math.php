<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>math calculation in php</title>
</head>
<body>
    <h2>basic php tutorial </h2>

    <?php

echo(pi());
echo "<br>";

$a = array(2, 3, 4, 44, 55, 0, -67);
echo(min($a));
echo "<br>";
echo(max($a));
echo "<br>";

$B = -78;
echo(abs($B));
echo "<br>";
echo(sqrt($B)); //return NONE because -78 negetive number
echo "<br>";
$x = 45;
echo(sqrt($x));
echo "<br>";

//rount() return floating point to nearest number
$z = 0.5;
echo(round($z));









?>
    
</body>
</html>