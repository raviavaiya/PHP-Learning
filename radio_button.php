<a href="index.php">Home</a><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio Button</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <input type="radio" name="creadit" value="Visa">Visa<br>
        <input type="radio" name="creadit" value="Rupay">Rupay <br>
        <input type="radio" name="creadit" value="MasterCard">MasterCard <br>
        <input type="submit" value="Submit" name="confirm">
    </form>    
</body>
</html>
<?php  

    if(isset($_POST["confirm"])){

        if(!empty($_POST["creadit"])){
            $creadut_card=$_POST["creadit"];
            echo $creadut_card;
        }else{
            echo "Please Checked the Card !!!";
        }
       
    }

?>