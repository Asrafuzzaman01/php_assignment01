<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Php practice tutorial </title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

      <section class="header">
       <?php

echo " <h2>Basic Php practice tutorial </h2>";

//Global Keyword

$x = 30;
$y = 20;
function test()
{
    global $x, $y;
    $y = $x + $y;


}
test();
echo "$y";
// static keyword

function st()
{
    static $x = 10;
    echo $x;
    $x--;


}
st();
echo "<br>";
st();
echo "<br>";
st();
echo "<br>";
st();











?>
      </section>


  
   
   <section class="footer">
    
   </section>


    
</body>
</html>