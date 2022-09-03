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
//Foreach loop

//Intialization
//Evaluted once at the beginning

//Condition
//Option 1 - If its true, execute
//Option 2 - If its false, stop

//Counter
//Evaluated at the end of every loop

for ($x = 1; $x <= 10; $x++) {
    echo "The number is: " . $x;
    echo "<br>";
}


//EXERCISE
//Going to the bank on the 1st of January
//Want to deposit 1000 dollars.
//Interest rate is 5%
//Withdrawl it after 5 years


$deposit = 1000;
$interest = 0.05;

for ($years = 1; $years <= 5; $years++) {
    $deposit += ($deposit * $interest);
    echo "The total amount after " . $years . " year is: " . $deposit;
    echo "<br>";
}
?>
</body>
</html>
