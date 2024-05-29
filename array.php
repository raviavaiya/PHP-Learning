
<?php
    // array - "Variable" which can hold more than one value at a time 

    $foods=array("apple","banana","orange","strawberry");
    echo $foods[0]."<br>";
    echo $foods[1]."<br>";
    echo $foods[2]."<br>";
    echo $foods[3]."<br>";

    array_push($foods,"pineapple","kiwi");
    // array_pop($foods);
    // array_shift($foods);
   $reversed_array= array_reverse($foods);

   echo count($foods);

    foreach($reversed_array as $food){
        echo $food . "<br>";

    }

    ?>