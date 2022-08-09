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
/* string : strln, str_count_word, strrev, strpos, str_replace()*/
$name = "Asrafuzzaman mithu";

function mt()
{
    global $name;
    echo str_word_count(" word of :$name");
    echo "<br>";
    echo strlen("lenth of name:$name");
    echo "<br>";

    echo strrev("reverce of name:$name");
    echo "<br>";

    echo strpos("pos of name:$name", "mithu");
    echo "<br>";




}
mt();



?>
      </section>


  
   
   <section class="footer">
    
   </section>


    
</body>
</html>