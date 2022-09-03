<?php
/* SERVER
$server = [
    "Path" => $_SERVER['PHP_SELF'],
    "Name" => $_SERVER['SERVER_NAME'],
    "Host" => $_SERVER['HTTP_HOST'],
    "User" => $_SERVER['HTTP_USER_AGENT'],
    "Script" => $_SERVER['SCRIPT_NAME']
];
*/
include 'contact.php';


?>

<h1>
<?php
    if (isset($_POST['submit'])) {
        echo "Form is processed on home";
    }
?>
</h1>
