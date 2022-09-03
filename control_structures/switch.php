<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Conditional statement - Switch

$role = "Employee";

switch ($role) {
    case 'Visitor':
        echo "Welcome Visitor!";
    break;
    case 'Admin':
        echo "Welcome Admin!";
    break;
    case 'Superadmin':
        echo "Welcome Superadmin!";
    break;
    case 'Boss':
        echo "Welcome Boss!";
    break;
    default:
        echo "User has no role!";
}

?>
</body>
</html>
