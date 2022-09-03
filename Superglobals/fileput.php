<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_POST['submit'])) {
    $myFile = fopen("uploads/file.txt", "a");

    $txt = "My age is " . $_POST['age'] . "\n";

    fwrite($myFile, $txt);

    fclose($myFile);
}
?>

<form action="fileput.php" method="post">
    <input type="text" name="age">
    <input type="submit" name="submit">
</form>

</body>
</html>
