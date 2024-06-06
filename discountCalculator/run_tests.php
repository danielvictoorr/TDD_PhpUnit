<?php

include 'autoloader.php';

foreach (new DirectoryIterator(__DIR__) as $file) {
    
   if( substr($file->getFilename(),-8)!= 'Test.php' ) continue;
    
   $className = substr($file->getFilename(),0,-4);
   $testeClass = new $className();

   $method = get_class_methods($testeClass);
   foreach($method as $method){

       $testeClass->$method();
   }
}