<a href="index.php">Home</a><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        Username :
        <input type="text" name="username">
        <br>
        <input type="submit" value="Login" name="login">
    </form>
</body>

</html>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {

    echo "Hello";

}




?>