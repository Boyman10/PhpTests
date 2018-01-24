<?php
class A
{
  public function hello($arg1, $arg2, $arg3 = 1, $arg4 = 'Hello world !')
  {
    var_dump($arg1, $arg2, $arg3, $arg4);
  }
}

$a = new A;
$hello = new ReflectionMethod('A', 'hello');

$hello->invoke($a, 'test', 'autre test'); // On ne va passer que deux arguments à notre méthode.

// A l'écran s'affichera donc :
// string(4) "test" string(10) "autre test" int(1) string(13) "Hello world !"