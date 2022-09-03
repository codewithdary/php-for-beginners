<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//SESSION
//Good to use for sensitive information
//Session exists as long as the browser is ope

session_start();

//Storing information
$_SESSION["Name"] = "Dary";
$_SESSION["Age"] = 24;

echo "Hello " . $_SESSION["Name"];

session_destroy();

echo "Hello " . $_SESSION["Name"];

?>
</body>
</html>
