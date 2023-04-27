<?php 
$heading = "Home"; 




function dd($value) {
    echo "<pre>";
    var_dump($value); 
    echo "</pre>";
 die(); 
}



echo $_SERVER["REQUEST_URI"];
//dd($_SERVER); 
//dd($heading);


require "views/index.view.php"; 
 //echo dd($_SERVER["REQUEST_URI"]);
