<a href="index.php">Home</a><br>

<?php

$password = "Ravi123";

$hash=password_hash($password,PASSWORD_DEFAULT);
echo $hash;

if(password_verify("Ravi123",$hash)){
    echo "<br>YOu are logg In ";
}else{
    echo "<br>Password Are Wrong!!! ";
}