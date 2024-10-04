<?php
// Задание 1
$name = ["Anna", "Oleg", "Alex", "Maria"];
foreach ($names as $name) {
    echo $name;
}
// Задание 2
$number = [1, 5, 7 ,6]
for ($i = 0; $i < count($number); $i++) {
    echo $number[$i];
    }
    

// Задание 3
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
    ];
echo $person;    
// Задание 4
$numbers = [1, 5, 7, 8, 14, 95];
foreach ($numbers as $number) {
    if ($number > 10) {
    echo $number;
    }
}
    
// Задание 5
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";
// Задание 6
$product = ["name" => "apple", "price" => 578, "quantity" => 698];
$keys = array_keys($product);
print_r($keys);
// Задание 9
$array1 = [4, 6, 8, 7];
$array2 = [8, 5, 7, 3];
$merged = array_merge($array1, $array2);
foreach ($mergeds as $merged) {
    sort($merged);
 echo $merged;
}
    
print_r($merged);
// Задание 10
$numbers = [1, 5, 7, 8, 14, 95];
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
    echo $number;
    }
}

