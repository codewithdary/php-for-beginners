<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Superglobals
// GLOBALS
// $_POST
// $_GET
// $_SERVER
// $_COOKIE
// $_SESSION
// $_FILES

$x = 100;
$y = 200;

function add() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $z;

?>
</body>
</html>
