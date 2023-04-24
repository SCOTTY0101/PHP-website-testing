<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
    h1, p {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
</head>

<body>
    <h1>Recommended Books</h1>
        
        <ul>   
            <?php foreach($filteredBook as $book) : ?>
                    <li>
                        <a href=" <?= $book['buyUrl'] ?> ">
                            <?= $book['name']; ?> (<?= $book['releaseYear']?>)  <?= $book['author'] ?>
                        </a>
                    </li>
            <?php endforeach; ?>
            

        </ul>

    

</body>
</html>

