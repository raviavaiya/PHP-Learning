<a href="index.php">Home</a><br>

<!-- Switch Case -- replacement to using many elseif statements -->
<!--    More Efficient , less code to write -->

<?php

$grade = "B";

switch ($grade) {
    case "A":
        echo "First Distiction";
        break;
    case "B":
        echo "Second Distiction";
        break;
    case "C":
        echo "Distiction";
        break;
    case "F":
        echo "Fail";
        break;
    default:
        echo"{$grade} is not Valid";
}
