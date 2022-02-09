<?php
// Require in and initialize our helper class
require('./Helpers.php');
$helpers = new Helpers();

// Above/Below Test
$testNumbers = [1, 5, 2, 1, 10];
$comparisonValue = 6;
echo '# aboveBelow() Test Results' . PHP_EOL;
print_r($helpers->aboveBelow($testNumbers, $comparisonValue));

// String Rotation Test
$stringToRotate = "MyString";
$totalRotations = 2;
//$totalRotations = -2; // Try this, too
echo PHP_EOL . '# stringRotation() Test Results' . PHP_EOL;
print_r($helpers->stringRotation($stringToRotate, $totalRotations));