<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//While loop
//Do-while
//For loop
//Foreach loop - Iterate over array variables

$names = array("John", "Michael", "David");

foreach ($names as $name) {
    echo "My name is " . $name;
    echo "<br>";
}

$person = array("Name" => "Dary", "Age" => 30, "Gender" => "Male");

foreach($person as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
}

?>
</body>
</html>
