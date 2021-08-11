<?php

echo '<pre>';

// 1.

$a = 5;
$b = '5';
var_dump($a);
var_dump($b);
var_dump($a == $b);
var_dump($a === $b);


// 2.

$a = 5;
$b = 1;
$c = 11;

echo ($a + $b + $c) / 3;
echo '<br><br>';


// 3.

$a = 10;
$a *= 5;
echo $a;
echo '<br><br>';


// 4.

$a = 5;
$b = 7;
if (gettype($a) === 'integer' && gettype($b) === 'integer') {
    echo 'Promenljive su tipa integer';
} else {
    echo 'Promenljive nisu tipa integer';
}
echo '<br><br>';


// 5.

$a = 5;
$b = '4';
if (gettype($a) === 'integer' && gettype($b) === 'integer') {
    echo 'Promenljive su tipa integer';
    echo $a + $b;
} else {
    echo 'Promenljive nisu tipa integer';
}
echo '<br><br>';


// 6.

$n = 3;
if ($n % 2 === 0) {
    echo "$n je paran broj";
} else {
    echo "$n je neparan broj";
}
echo '<br><br>';


// 7.

$i = 20;
while ($i <= 30) {
    echo $i . ' ';
    $i++;
}
echo '<br><br>';


// 8.

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo $sum;
echo '<br><br>';


// 9.

$power = 1;
$a = 2;
$b = 5;
for ($i = 0; $i < $b; $i++) {
    $power *= $a;
}
echo $power;
echo '<br><br>';


// 10.

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo $i * $j;
        echo ' ';
    }
    echo '<br>';
}
echo '<br><br>';


// 11.

$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
foreach ($months as $month) {
    echo $month . '<br>';
}
echo'<br><br>';


// 12.

$arr = [2, 7, 19, 4, 1, -1, 5];
$max = $arr[0];
foreach ($arr as $number) {
    if ($number > $max) {
        $max = $number;
    }
}
echo $max;
echo '<br><br>';


// 13.

$capitals = [
    "Italy"      => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium"    => "Brussels",
    "Denmark"    => "Copenhagen",
    "Finland"    => "Helsinki",
];

foreach ($capitals as $country => $city) {
    echo "The capital of $country is $city.<br>";
}
echo '<br><br>';


// 14.

$a = [];
$b = [];
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 === 0) {
        $a[] = $i;
    } else {
        $b[] = $i;
    }
}
var_dump($a);
var_dump($b);
echo '<br><br>';


// 15.

$a = ["Italy", "Luxembourg", "Belgium", "Denmark", "Finland"];
$b = ["Rome", "Luxembourg", "Brussels", "Copenhagen", "Helsinki"];
$c = [];
for ($i = 0; $i < count($a); $i++) {
    $c[$a[$i]] = $b[$i];
}
var_dump($c);
echo '<br><br>';


// 16.

$monthDays = [
    'January' => 31,
    'February' => 28,
    'March' => 31,
    'April' => 30,
    'May' => 31,
    'June' => 30,
    'July' => 31,
    'August' => 31,
    'September' => 30,
    'October' => 31,
    'November' => 30,
    'December' => 31
];
foreach ($monthDays as $month => $days) {
    for ($i = 1; $i <= $days; $i++) {
        echo "$i. $month <br>";
    }
}
echo '<br><br>';


// 17.

$a = [20, 51, 63, 13, 6, 22];
$b = [1, 55, 51, 9, 20];
$c = array_intersect($a, $b);
var_dump($c);
echo '<br><br>';


// 18.

function subtract($a, $b) {
    return $a - $b;
}
echo subtract(5, 2);
echo '<br><br>';


// 19.

function minimum($arr) {
    $min = $arr[0];
    foreach ($arr as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }
    return $min;
}

echo minimum([20, 51, 63, 13, 6, 22]);
echo '<br><br>';


// 20.

function sumArray($arr) {
    $sum = 0;
    foreach ($arr as $number) {
        $sum += $number;
    }
    return $sum;
}

echo sumArray([20, 51, 63, 13, 6, 22]);
echo '<br><br>';


// 21.

function countOccurences($arr, $a) {
    $count = 0;
    foreach($arr as $number) {
        if ($number === $a) {
            $count++;
        }
    }
    return $count;
}

echo countOccurences([20, 51, 63, 20, 6, 22], 20);
echo '<br><br>';


// 22.

function countVowels($str) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] === 'a' || $str[$i] === 'A' ||
            $str[$i] === 'e' || $str[$i] === 'E' ||
            $str[$i] === 'i' || $str[$i] === 'I' ||
            $str[$i] === 'o' || $str[$i] === 'O' ||
            $str[$i] === 'u' || $str[$i] === 'U') { 
                $count++;
            }
    }
    return $count;
}

echo countVowels('Hello world!');
echo '<br><br>';