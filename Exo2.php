<?php
// Exercice 1
$string = "hello";
$int = 42;
$bool = true;
echo gettype($string) . "\n";
echo gettype($int) . "\n";
echo gettype($bool) . "\n";

// Exercice 2
$a = "10";
$b = 5;
$result = $a + $b;
echo $result . "\n";
var_dump($result);

// Exercice 3
$str = "123";
$int = (int)$str;
var_dump($int);
$float = 7.8;
$str = (string)$float;
var_dump($str);

// Exercice 4
$value = 0;
var_dump(is_int($value));
var_dump(empty($value));
$value = null;
var_dump(is_int($value));
var_dump(empty($value));
$value = "";
var_dump(is_int($value));
var_dump(empty($value));
$value = false;
var_dump(is_int($value));
var_dump(empty($value));
$value = array();
var_dump(is_int($value));
var_dump(empty($value));

// Exercice 5
$age = "35";
echo gettype($age) . "\n";
settype($age, "integer");
echo gettype($age) . "\n";

// Exercice 6
var_dump("0" == false);
var_dump("0" === false);

// Exercice 7
$array = array(1, 3.14, true, "hello", null);
foreach ($array as $element) {
    var_dump($element);
}
?>