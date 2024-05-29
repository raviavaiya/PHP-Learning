<a href="index.php">Home</a>

<?php

include("database.php");


$sql = "select * from tbl_user";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo  $row["u_id"] . "<br>";
        echo  $row["username"] . "<br>";
        echo  $row["time"] . "<br>";
    }
} else {
    echo "No User Found";
}

?>