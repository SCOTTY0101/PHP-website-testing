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

    <?php 
        $books = [
            [
               'name' =>  'I.T novel',
                'author' => 'Bret Fargo',
                'releaseYear' => 2001,
                'buyUrl' => 'https://whereToBuy.com'
            ],
            [
                'name' => 'I.T novel part two',
                'author' => 'Bret Fargo',
                'releaseYear' => 2022,
                'buyUrl' => 'https://exaple.com'
            ],
            [
                'name' => 'Learn to code in 10mins',
                'author' => 'Unknown Person',
                'releaseYear' => 1988,
                'buyUrl' => 'https://takeYourMoney.com'
            ]
            ];

          
           $filteredBook = array_filter($books, function($book) {
            return $book['releaseYear'] > 1988;
           })
    ?>

        
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

