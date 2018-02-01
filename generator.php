<?php
/**
 * Function and test for the generator feature
 * A generator is an instance of class implementing iterator
 */
echo '<h2>First example</h2><p>Check the source code...</p>';
/**
 * This function is a generator as it contains the word <b>yield</b>
 */
function readLines($fileName)
{
  // Do not go forward if file not existing :
  if (!$file = fopen($fileName, 'r'))
  {
    return;
  }
 
  // As long as there are lines to read :
  while (($line = fgets($file)) !== false)
  {
    // We tell Php that the following line is next table entry
    yield $line;
  }
 
  fclose($file);
}

/**
 * Following lines are testing the function :
 */

$generator = readLines('index.html');

foreach ($generator as $line)
{
    echo '<p>Currrent line is : '.$line.'</p>';
}

echo '<h2>Another example</h2>';

function generator()
{
    // On retourne ici des chaines de caractères assignées à des clés
    yield 'a' => 'Itération 1';
    yield 'b' => 'Itération 2';
    yield 'c' => 'Itération 3';
    yield 'd' => 'Itération 4';
}

foreach (generator() as $key => $val)
{
    echo $key, ' => ', $val, '<br />';
}


/**
 *
 * Now using Class and references
 */
  
class SomeClass
{
    protected $attr;
    
    public function __construct()
    {
        $this->attr = ['Un', 'Deux', 'Trois', 'Quatre'];
    }
    
    // Le & avant le nom du générateur indique que les valeurs retournées sont des références
    public function &generator()
    {
        // On cherche ici à obtenir les références des valeurs du tableau pour les retourner
        foreach ($this->attr as &$val)
        {
            yield $val;
        }
    }
    
    public function attr()
    {
        return $this->attr;
    }
}

$obj = new SomeClass;

// On parcourt notre générateur en récupérant les entrées par référence
foreach ($obj->generator() as &$val)
{
    // On effectue une opération quelconque sur notre valeur
    $val = strrev($val);
}

echo '<pre>';
var_dump($obj->attr());
echo '</pre>';




