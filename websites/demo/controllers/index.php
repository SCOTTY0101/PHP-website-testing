<?php $heading = "Home"; ?>




<?php function dd($value) {
 echo "<pre>";
 var_dump($value); 
 echo "</pre>";
 die(); 
}

?>


<?php require "views/index.view.php"; ?>
