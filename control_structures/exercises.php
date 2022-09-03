<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$num1 = 0;
$num2 = 1;
$counter = 0;

while ($counter < 10) {
    echo ' '. $num1;
    $num3 = $num2 + $num1;
    $num1 = $num2;
    $num2 = $num3;
    $counter++;
}

?>
</body>
</html>
