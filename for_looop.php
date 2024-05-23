<a href="index.php">Home</a><br>

<!-- For Loop - Repeat some code a certain # of times -->

<?php
$counter = 0;
for ($i = 0; $i < 5; $i++) {
    $counter++;
    echo "{$counter}. Hello<br>";
}

?>
<br>
<?php
for ($i = 1; $i < 20; $i+=2) {
    $counter++;
    echo "{$i}. Hello<br>";
}
?>
<br>
<?php
for ($i = 2; $i < 20; $i+=2) {
    $counter++;
    echo "{$i}. Hello<br>";
}