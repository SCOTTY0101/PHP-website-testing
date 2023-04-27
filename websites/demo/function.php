<?php

function dd($value) {
    echo "<pre>";
    var_dump($value); 
    echo "</pre>";
    die(); 
   }
   

   $string1 = "stringValue";
   dd(['$string1']);