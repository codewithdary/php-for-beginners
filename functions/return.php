<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Functions with return value

//Pass by value
$num1 = 10;
$num2 = 15;

function add($num1, $num2) {
    $result = $num1 + $num2;
    return $result;
}

//echo "The number is: " . add($num1, $num2);

//Pass by reference
$x = 10;

function addByValue($x) {
    $x += 5;
}

function addByReference(&$x) {
    $x += 10;
}

addByValue($x);
echo "The value is: " . $x;

echo "<br>";

addByReference($x);
echo "The value is: " . $x;

?>
</body>
</html>
