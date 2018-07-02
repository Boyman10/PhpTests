<?php 

class A {
    
    public function meNow($a,$b)
    {
        var_dump($a);
        var_dump($b);
    }
}


$str = "0000040";

echo (int) $str;

echo '<h4>Other Test</h4>';

$paths = array("String2",2,"cool","Great");

$paths2 = array_filter($paths,is_string);
var_dump($paths);

var_dump($paths2);

$params=$_GET['params'];

print_r($params);


// testing clall_user_func_array();
$class = "A";
$target = "meNow";

if (class_exists($class, true)) {
    $class = new $class();
    if (in_array($target, get_class_methods($class))) {
        //Appel de la méthode $class->target() avec tableau arguments
        call_user_func_array([$class, $target], $params);
    }
}

