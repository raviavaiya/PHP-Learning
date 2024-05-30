<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="fileUpload.php" method="post" enctype="multipart/form-data">

        <input type="file" name="image" id="image">
        <br>
        <input type="submit" value="Upload" name="upload">
    </form>
</body>

</html>

<?php

if (isset($_POST['upload'])) {
    $imagename = $_FILES['image']['name'];
    $tempImage = $_FILES['image']['tmp_name'];

    $targetDir = 'img/';

    $image = $targetDir . $imagename;

    if (move_uploaded_file($tempImage, $image)) {
        $insert = "insert into tbl_image (image) values ('$image')";
        $run = mysqli_query($con, $insert);
        if ($run) {
            echo "Uploaded Succcessfully";
        } else {
            echo "Not Uploaded Succcessfully";
        }
    }
}

?>