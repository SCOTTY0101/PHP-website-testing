<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
    h1 {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>

<body>
    
    <?php 
    $book = "Hell";
    $read = true;
   // echo "$greeting Awaits you";
   // echo "<p>ghgh</p>";
   if ($read == true) {
    $message = " boolean You read the book $book ";
   }
    
    ?>
   

    <h1>
        You read the book <?php echo $book; ?>.
        <?php echo $message; ?>
    </h1>

</body>
</html>