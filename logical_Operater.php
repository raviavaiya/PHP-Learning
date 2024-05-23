<a href="index.php">Home</a><br>

<!-- Logical Operaters = Combine Conditional Statements -->
<!-- if ( Condition 1  && Condition 2 ) == True if both Conditions are true -->
<!-- if ( Condition 1  || Condition 2 ) == True if at least One Conditions is true -->
<!-- if ( ! Condition 1 ) == True if false. False is true -->

<?php

    $temp=-25;
    // && Operaters
    if($temp>=0 && $temp<=30){
        echo"the weather is good.";
    }else{
        echo"The weather is bad.";
    }

    // || Operaters
    if($temp>=0 || $temp<=30){
        echo"the weather is bad.";
    }else{
        echo"The weather is good.";
    }

    // ! Operaters
    $cloudy=true;
    if(!$cloudy==true){
        echo"It's Cloudy";
    }else{
        echo"It's Sunny";
    }
?>