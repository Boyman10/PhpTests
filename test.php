<?php 

$str = "0000040";

echo (int) $str;

echo '<h4>Other Test</h4>';

$paths = array("String2",2,"cool","Great");

$paths2 = array_filter($paths,is_string);
var_dump($paths);

var_dump($paths2);