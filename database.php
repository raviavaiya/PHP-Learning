<a href="index.php">Home</a>

<?php


$_server = "localhost";
$_username = "root";
$_password = "";
$_dbName = "demo";

try {
    $con = mysqli_connect($_server, $_username, $_password, $_dbName);

    if ($con) {
        echo "DatabAse Connected<br>";
    } else {
        echo "Not Connected";
    }
} catch (mysqli_sql_exception) {
    echo "Not Connect";
}
