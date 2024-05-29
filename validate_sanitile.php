<a href="index.php">Home</a><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validate_sanitile.php" method="post">
        Username :
        <input type="text" name="username"><br>
        <input type="submit" name="login" value="Log In">

    </form>
</body>
</html>

<?php
if(isset($_POST['login'])){
    $username=filter_input(INPUT_POST,"username",FILTER_VALIDATE_EMAIL);
    echo $username;
}