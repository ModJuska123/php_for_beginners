<?php
$array_test = ["two"=>"First post", "Second post", "Third post",];
var_dump($array_test);


$array = ["banaba", "apple", "third"=>"orange"];
foreach ($array as $index=>$value) {
    echo "$index = $value.";
}
