<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$num1 = 5;
$num2 = 5;

//Parameters
function calculator($num1 = 5, $num2) {
    echo $num1 * $num2;
}

//Arguments
calculator($num1);


?>
</body>
</html>
