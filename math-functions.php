<a href="index.php">Home</a><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math-functions.php" method="post">
        <label for="">x :</label>
        <input type="text" name="x" id="x"><br>
        <label for="">y :</label>
        <input type="text" name="y" id="y"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php

$x=$_POST["x"];
$y=$_POST["y"];
$total=null;
// $total=abs($x);
// $total=round($x);
// $total=floor($x);
// $total=ceil($x);
// $total=pow($x,$y);
// $total=sqrt($x);
// $total=max($x,$y);
// $total=min($x,$y);
// $total=pi();
// $total=rand(1000,9999);

echo$total;
?>