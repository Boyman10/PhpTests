<?php
//https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/l-api-de-reflexivite
// On commence par inclure les fichiers nécessaires.
require 'addendum/annotations.php';
require 'Table.php';
require 'Buddy.php';

$reflectedClass = new ReflectionAnnotatedClass('Buddy');


$ann = 'Table';

if ($reflectedClass->hasAnnotation($ann))
{
    echo 'La classe possède une annotation <strong>', $ann, '</strong> dont la valeur est <strong>',
            $reflectedClass->getAnnotation($ann)->value, '</strong><br />';
}