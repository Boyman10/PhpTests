<?php

require_once("TaskRunner.php");

$taskRunner = new TaskRunner;

function task1()
{
  for ($i = 1; $i <= 2; $i++)
  {
    $data = yield;
    echo 'Tâche 1, itération ', $i, ', valeur envoyée : ', $data, '<br />';
  }
}

function task2()
{
  for ($i = 1; $i <= 6; $i++)
  {
    $data = yield;
    echo 'Tâche 2, itération ', $i, ', valeur envoyée : ', $data, '<br />';
  }
}

function task3()
{
  for ($i = 1; $i <= 4; $i++)
  {
    $data = yield;
    echo 'Tâche 3, itération ', $i, ', valeur envoyée : ', $data, '<br />';
  }
}

$taskRunner->addTask(task1());
$taskRunner->addTask(task2());
$taskRunner->addTask(task3());

$taskRunner->run();

?>
<h3>Throwing exception :</h3>
<?php
function generator()
{
  // On fait une boucle de 5 yield pour garder quelque chose de simple
  for ($i = 0; $i < 5; ++$i)
  {
    // On indique qu’on vient de rentrer dans la ième itération
    echo "Début $i<br />";
    
    // On essaye « d’attraper » la valeur qu’on nous a donnée
    try
    {
      yield;
    }
    catch (Exception $e)
    {
      // Si une exception a été levée, on indique son numéro
      echo "Exception $i<br />";
    }
    
    // Enfin, on indique qu’on vient de finir la ième itération
    echo "Fin $i<br />";
  }
}

$gen = generator();

foreach ($gen as $i => $val)
{
  // On décide de lancer une exception pour l’itération n°3
  if ($i == 3)
  {
    $gen->throw(new Exception('Petit test'));
  }
}