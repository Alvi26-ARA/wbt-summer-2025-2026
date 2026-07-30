<?php

// Task 1: Area and Perimeter of Rectangle

$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "<h3>Task 1: Rectangle</h3>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";


// Task 2: VAT Calculation

$amount = 1000;
$vat = $amount * 15 / 100;

echo "<h3>Task 2: VAT</h3>";
echo "Amount = $amount <br>";
echo "VAT = $vat <br><br>";


// Task 3: Odd or Even

$num = 25;

echo "<h3>Task 3: Odd or Even</h3>";

if ($num % 2 == 0) {
    echo "$num is Even <br><br>";
} else {
    echo "$num is Odd <br><br>";
}


// Task 4: Largest of Three Numbers

$a = 25;
$b = 40;
$c = 30;

echo "<h3>Task 4: Largest Number</h3>";

if ($a >= $b && $a >= $c) {
    echo "$a is the largest number <br><br>";
} 
else if ($b >= $a && $b >= $c) {
    echo "$b is the largest number <br><br>";
} 
else {
    echo "$c is the largest number <br><br>";
}


// Task 5: Odd Numbers from 10 to 100

echo "<h3>Task 5: Odd Numbers from 10 to 100</h3>";

for ($i = 10; $i <= 100; $i++) {

    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// Task 6: Search Element from Array

echo "<h3>Task 6: Array Search</h3>";

$numbers = array(10, 20, 30, 40, 50);

$search = 30;
$found = false;

for ($i = 0; $i < count($numbers); $i++) {

    if ($numbers[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$search is found in the array <br><br>";
} 
else {
    echo "$search is not found in the array <br><br>";
}


// Task 7(a): Star Pattern

echo "<h3>Task 7(a): Star Pattern</h3>";

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }

    echo "<br>";
}


// Task 7(b): Number Pattern

echo "<h3>Task 7(b): Number Pattern</h3>";

for ($i = 3; $i >= 1; $i--) {

    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }

    echo "<br>";
}


// Task 7(c): Alphabet Pattern

echo "<h3>Task 7(c): Alphabet Pattern</h3>";

$letter = 'A';

for ($i = 1; $i <= 3; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo $letter . " ";
        $letter++;
    }

    echo "<br>";
}

?>