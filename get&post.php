<a href="index.php">Home</a><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get&post.php" method="post">
        <label for="">UserName :</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Password :</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="log In">
    </form>
</body>

</html>

<?php

echo "Your Username is : {$_POST["username"]}<br>Your Password is : {$_POST["password"]}";
