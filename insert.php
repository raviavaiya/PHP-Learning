
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
    <form action="insert.php" method="post">
        username :
        <input type="text" name="username"><br>
        password :
        <input type="password" name="password">
        <br>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>

<?php
if(isset($_POST["register"])){
    
$username=$_POST["username"];
$password=$_POST["password"];

$hash=password_hash($password,PASSWORD_DEFAULT);

$register="insert into tbl_user (username, password) values ('$username','$hash')";

$insert=mysqli_query($con,$register);

if($insert){
    echo "Registerd";
}else{
    echo "Not Registerd";
}
}


?>