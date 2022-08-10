<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>control statement</title>

</head>
<body>

<h2>COntrol statement</h2>
<?php
$numbr = 66;
if ($numbr < 100) {
    echo "$numbr is less than 100";
    echo "<br>";
}

//if else statement
$x = 13;
if ($x % 2 == 0) {
    echo "$x is a even number";
}
else {
    echo "$x is a odd number";

}
echo "<br>";
//if else if statement     
$marks = 69;
if ($marks < 33) {
    echo "FAIL";
}
else if ($marks >= 34 && $marks < 50) {
    echo "D grade";


}
else if ($marks >= 50 && $marks < 60) {
    echo "C grade";
}
else if ($marks >= 60 && $marks < 70) {
    echo "B grade";

}
else if ($marks >= 70 && $marks < 80) {
    echo "A grade";


}
else if ($marks >= 80 && $marks <= 100) {
    echo "A+ grade";
}
else {
    echo "invelide your result";
    
}
echo"<br>";



//switch statement with string

$x = "c.cse";
switch($x)
{

    case "c.eng";
    echo"eng is 4 years course";
    break;
    case "c.LLB";
    echo"LLB is 4 years course";
    break;
    case"c.cse";
    echo"cse is 4 years course";
    break;

    case"c.BBA";
    echo"BBA is 4 years course";
    break;

    default;
    echo"Wrong choice";



}
//for loop
for ($x = 0; $x <=20; $x++) {
    echo "The number is: $x <br>";
  }







?>
    
</body>
</html>