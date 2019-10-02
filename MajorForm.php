<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="get" enctype="multipart/form-data">
    <label>Enter your name</label>
    <input name="myName" type="text">
    <input type="submit">
</form>
<?php
// taking names as input from the user and appending them to a file
if (isset($_GET["myName"])) {
    $handle = fopen("alpha.txt", "a");
    fwrite($handle, $_GET["myName"]."\n");
}
?>
</body>
</html>