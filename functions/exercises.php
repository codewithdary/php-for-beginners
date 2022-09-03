<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$num1 = 7;

function isPrime($num1) {
    if ($num1 == 1) {
        return false;
    } else {
        for ($i = 2; $i < $num1 / 2; $i++) {
            if ($num1 % $i == 0) {
                return false;
            }
        }
        return 1;
    }
}

if (isPrime($num1)) {
    echo "This number is a prime";
} else {
    echo "This number is not a prime";
}

?>
</body>
</html>
