<a href="index.php">Home</a><br>
<?php
//Variable - is reusable container it holds data
//        String, Integer, Float, Boolean


$name = "Ravi Avaiya";
$food = "Apple";
$email = "ravvi@gmail.com";


$age = 21;

$gpa = 2.3;
$price = 56.21;
$emplopyed = true;

echo "{$name}";
echo "<br>";
echo "{$food}";
echo "<br>";
// Also Do This way
echo "My Name is {$name}.";
echo "<br>";
echo "My favorite fruit is {$food}.";
echo "<br>";
echo "my email is {$email}";
echo "<br>";
echo "i am {$age} years old.";
echo "<br>";
echo "your GPA is {$gpa}";
echo "<br>";
echo "Your Pizza's price is \${$price}";
echo "<br>";
echo "<br>";
$total = null;
$quantity = 5;
echo " Your pizza's order :{$quantity} x {$price}";

$total=$quantity*$price;
echo "<br>";
echo"Total Amount is : {$total}";