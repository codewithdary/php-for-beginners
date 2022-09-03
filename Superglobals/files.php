<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//$_FILES
//How to upload files
//1. Upload it to the root
//2. Directly to the database

//enctype="multipart/form-data
//Specifies how the form data should be encoded
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">SUBMIT</button>
</form>

</body>
</html>
