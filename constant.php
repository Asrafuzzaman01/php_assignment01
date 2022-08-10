<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant .php </title>
</head>
<body>

<h2>constant TUTORIAL</h2>
<?PHP


define("name", "Md asrafuzzaman");
echo name;
echo "<br>";

//Create an Array constant:

define("man", ["korim", "rohim", "mina", "mimi", ]);
echo man[2];
echo "<br>";


// constant global 

function constnt()
{

    echo man[0];

}
constnt();











?>
    
</body>
</html>