<a href="index.php">Home</a><br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Boxes</title>
</head>
<body>
    <form action="check_boxes.php" method="post">
        <input type="checkbox" name="food[]" value="Apple">Apple <br>
        <input type="checkbox" name="food[]" value="Banana">Banana <br>
        <input type="checkbox" name="food[]" value="Orange">Orange <br>
        <input type="checkbox" name="food[]" value="Kiwi">Kiwi <br>
        <input type="submit" value="Confirm" name="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST['confirm'])){

        $foods=$_POST["food"];

        foreach($foods as $food){
            echo $food."<br>";
        }



        // if(isset($_POST['apple'])){
        //     echo "You like Apple <br>";
        // }
        // if(isset($_POST['banana'])){
        //     echo "You like Banana <br>";
        // }
        // if(isset($_POST['orange'])){
        //     echo "You like Orange <br>";
        // }
        // if(isset($_POST['kiwi'])){
        //     echo "You like Kiwi <br>";
        // }
        // if(empty($_POST['apple'])){
        //     echo "You Don't like Apple <br>";
        // }
        // if(empty($_POST['banana'])){
        //     echo "You Don't like Banana <br>";
        // }
        // if(empty($_POST['orange'])){
        //     echo "You Don't like Orange <br>";
        // }
        // if(empty($_POST['kiwi'])){
        //     echo "You Don't like Kiwi <br>";
        // }
    }
?>