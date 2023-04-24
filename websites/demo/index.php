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

<?php require "index.view.php"; ?>
