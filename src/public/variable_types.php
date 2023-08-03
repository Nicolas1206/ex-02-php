<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$firstName = 'Nicolas';
echo "<p>Hi! My name is " . $firstName . ".</p>";
$age = '28';
echo "<p>I am"." ". $age ." "."years old.</p>";
$eyeColor = 'brown';
echo "<p>My eyes are"." ". $eyeColor.".</p>";
$family = array(
    0 => 'Miguel',
    1 => 'Nicole',
    2 => 'David',
    3 => 'Nicolas'
    );
echo "<p>The first person in my family is" . " " . $family[0] . ".</p>";
?>
