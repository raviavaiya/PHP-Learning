<a href="index.php">Home</a><br>
<?php    

    // associative array - An array made of key => Value pairs 

    $capitals=array("USA"=>"Whashiton D.C",
                    "India"=>"Delhi",
                    "Korea" => "Seoul",
                    "japan"=>"kyoto");

    echo $capitals["japan"];

    echo "<br>";


    $capitals["USA"]="Las Vegas";
    $capitals["China"]="Bejing";
    array_pop($capitals);
    $capitals["China"]="Bejing";
    array_shift($capitals);
//   $KEYS=  array_keys($capitals);

//     foreach($KEYS as $key){
//         echo "{$key}<br>";
//     }

    echo "<br>";
    echo "VALUES <br>";
    echo "<br>";

    // $KEYS=array_flip($capitals);
$KEYS=array_reverse($capitals);

echo count($capitals);
echo"<br>";

    // $KEYS=  array_values($capitals);

    foreach($KEYS as $key=> $value){
        echo "{$key}={$value}<br>";
    }

    ?>