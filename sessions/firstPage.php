<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Page 1
    </title>
</head>
<body>
<form method="get" action="firstPage.php">
    <input name="name" type="text">
    <input type="submit">
</form>
<?php
session_start();
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
if (isset($name)) {
    $_SESSION['yourName'] = $name;
}
?>
<a href="secondPage.php">
    <button type="button">GO for it</button>
</a>
</body>
</html>
