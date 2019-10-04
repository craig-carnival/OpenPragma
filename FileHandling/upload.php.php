<!-- We will upload a text file, display it's properties on the first page and then move it to a specific folder -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload Page</title>
</head>
<body>
<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
    <input type="file" name="myFile[]" multiple>
    <!--    <input type="text" name="hello">-->
    <input type="submit">
    <a href="files.php">
        <button type="button">Proceed</button>
    </a>
</form>
<?php
session_start();
if (isset($_FILES['myFile'])) {
    echo "Uploaded " . $_FILES["myFile"]["name"][0] . "<br>";
    echo "Uploaded " . $_FILES["myFile"]["name"][1] . "<br>";
//    echo "Uploaded " . $_FILES["myFile"]["error"] . "<br>";
//    echo "Moving File <br>";

//    var_dump(move_uploaded_file($_FILES["myFile"]["tmp_name"], $_FILES["myFile"]["name"]));
//    $_SESSION['fileName'] = $_FILES["myFile"]["name"];
}
?>
</body>
</html>