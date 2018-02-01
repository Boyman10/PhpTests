<?php

/**
 * spl_autoload_register — Enregistre une fonction en tant qu'implémentation de __autoload()
 */
function autoload($classname)
{
  if (file_exists($file = __DIR__ . '/../model/' . $classname . '.php') || 
      file_exists($file = __DIR__ . '/../model/Factory/' . $classname . '.php'))
  {
    require $file;
  } 
  else {
      
      throw new Exception("File not found exception " . $classname .' --- HERE --- ' .__DIR__ . '/../model/' . $classname . '.php');
  }
}

spl_autoload_register('autoload');

