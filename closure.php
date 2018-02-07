<?php
//  classeClosure possède une méthode magique que l'on a vue :__invoke

$quantite = 5;
$additionneur = function($nbr) use($quantite)
{
  return $nbr + $quantite;
};

$listeNbr = [1, 2, 3, 4, 5];

$listeNbr = array_map($additionneur, $listeNbr);
var_dump($listeNbr);
// On a : $listeNbr = [6, 7, 8, 9, 10]

$quantite = 4;

$listeNbr = array_map($additionneur, $listeNbr);
var_dump($listeNbr);
// On a : $listeNbr = [11, 12, 13, 14, 15] au lieu de [10, 11, 12, 13, 14]


?>

<h2>Bind to...</h2>
<?php
$additionneur = function()
{
  $this->_nbr += 5;
};

class MaClasse
{
  private $_nbr = 0;

  public function nbr()
  {
    return $this->_nbr;
  }
}

$obj = new MaClasse;

// On obtient une copie de notre closure qui sera liée à notre objet $obj
// Cette nouvelle closure sera appelée en tant que méthode de MaClasse
// On aurait tout aussi bien pu passer $obj en second argument
$additionneur = $additionneur->bindTo($obj, 'MaClasse');
$additionneur();

echo $obj->nbr(); // Affiche bien 5

?>

<h3>now since Php 7</h3>
<?php

class Nombre
{
  private $_nbr;
  
  public function __construct($nbr)
  {
    $this->_nbr = $nbr;
  }
}

$closure = function() {
  var_dump($this->_nbr + 5);
};

$two = new Nombre(2);
$three = new Nombre(3);

$closure->call($two);
$closure->call($three);

?>
<h3>Static call</h3>
<?php
// Nous déclarons ici une closure statique
$additionneur = static function()
{
  self::$_nbr += 5;
};

class MaClasse
{
  private static $_nbr = 0;

  public static function nbr()
  {
    return self::$_nbr;
  }
}

$additionneur = $additionneur->bindTo(null, 'MaClasse');
$additionneur();

echo MaClasse::nbr();


