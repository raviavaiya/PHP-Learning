<a href="index.php">Home</a><br>

    <!-- if & Else Statements -->
<?php

    $age=120;
    if($age=100){
        echo"You are too old to enter for this site";
    }elseif($age>=20)
    {
        echo "Your may enter site.";
    }elseif($age<=0){
        echo"you were just Born";
    }else{
        echo "You Must be 20+ years old.";
    }


?>