<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>

<body>
    <h1>Recommended Books</h1>

    <?php 
        $books = [
            "I.T novel",
            "Second Book",
            "Learn to code in 10mins"
        ];
    ?>

        <ul>
            <?php foreach ($books as $book) {
                
                echo "<li>{$book}</li>";
            }
            ?>
        </ul>
    

</body>
</html>

<!-- CODE DUMP
<body>
    BOOK TEST VARIABLE
    <div>
<?php /*
    $book = "Hell";
    $read = false;
   // echo "$greeting Awaits you";
   // echo "<p>ghgh</p>";
   if ($read) {
    $message = " boolean You read the book $book ";
   } else {
    $message = " boolean You haven't read the book $book ";
   }
    */
    ?>
   

    <h1>
        You read the book <?php //echo $book; ?>. <br>
        <?php //echo $message; ?> <br>
       
    </h1>
    </div>

</body>

-->