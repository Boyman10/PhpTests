<?php
/**
Les closures permettent de représenter des fonctions anonymes.

Les closures sont souvent utilisées en tant que fonctions de rappels.

Il est possible de lier une closure à un objet ou à une classe grâce àbindTo.
*/
require_once("observed.php");
require_once("observer.php");

$o = new Observed;

$observer1 = function(SplSubject $subject)
{
  echo $this->name, ' a été notifié ! Nouvelle valeur de name : ', $subject->name(), "\n";
};

$observer2 = function(SplSubject $subject)
{
  echo $this->name, ' a été notifié ! Nouvelle valeur de name : ', $subject->name(), "\n";
};

$o->attach(new Observer($observer1, 'Observer1'))
  ->attach(new Observer($observer2, 'Observer2'));

$o->setName('Victor');
// Ce qui affiche :
// Observer1 a été notifié ! Nouvelle valeur de name : Victor
// Observer2 a été notifié ! Nouvelle valeur de name : Victor