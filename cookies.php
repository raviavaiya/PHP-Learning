<a href="index.php">Home</a><br>

<?php


setcookie("food", "Pizza", time()-0, "/");
setcookie("desssert", "ice-cream", time() + (86400 * 3), "/");
setcookie("fastfood", "sand-witch", time() + (86400 * 2), "/");

// setcookie("food", "Pizza", time() -0, "/");

// foreach($_COOKIE as $key => $value){
//     echo "{$key}={$value}<br>";
// }

if(isset($_COOKIE["food"])){
    echo "Buy Some {$_COOKIE['food']}";
}else{
    echo "I Don't Know What I Am Ate?";
}

?>