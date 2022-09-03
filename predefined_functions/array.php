<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Array functions

$personalInfo = array("Name" => "Dary", "Age" => 24, "City" => "Amsterdam");

$moreInfo = array("State" => "NH", "Weight" => 85);

$personalInfo = array_merge($personalInfo, $moreInfo);

foreach ($personalInfo as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

//print_r($personalInfo);

echo "<br>";

//Print only keys
//print_r(array_keys($personalInfo));

echo "<br>";

//Print only values
//print_r(array_values($personalInfo));

//Add value in array
$cars = array("Volkswagen", "Audi", "Mercedes");
array_push($cars, "Volvo");
print_r($cars);


//Search inside of an array
echo "<br>";
echo array_search("Mercedes", $cars);


//Count the number of items in a array
echo "<br>";
echo count($cars);

?>
</body>
</html>
