<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//String functions

//String length
$str = "Today is a sunny day ";

echo strlen($str);

//String word count
$firstName = "My first name is Dary";
echo "<br>";
echo str_word_count($firstName);

//How to find text within a string

$email = "info@darynazar.com";

echo "<br>";

if (strpos($email, "@")) {
    echo "This is a valid email";
} else {
    echo "This is a email input field!";
}

echo "<br>";
//Ucwords - Every first letter of a word is uppercase
echo ucwords("What is your name?" . "<br>");

//Whole string to uppercase
echo strtoupper("What is your name?" . "<br>");

//Whole string to lowercase
echo strtolower("What is your name?" . "<br>");


?>
</body>
</html>
