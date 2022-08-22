<?php

    $database = [
        [
            'title' => 'Il processo',
            'author' => 'Franz Kafka',
            'year' => '1925',
            'cover' => 'https://www.mondadoristore.it/img/Il-processo-Franz-Kafka/ea978880470085/BL/BL/01/NZO/?tit=Il+processo&aut=Franz+Kafka',
            'genre' => 'Narrativa distopica',
        ],
        [
            'title' => 'Harry Potter e il calice di fuoco',
            'author' => 'J.K. Rowling',
            'year' => '2000',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv-c9_Q2hKOfeQNon-xLWGF9EeCkeHiPztdw&usqp=CAU',
            'genre' => 'Fantasy',
        ],
        [
            'title' => 'Il Signore degli Anelli',
            'author' => 'J.R.R. Tolkien',
            'year' => '1955',
            'cover' => 'https://images-na.ssl-images-amazon.com/images/I/41t9lnhXuFL._SX330_BO1,204,203,200_.jpg',
            'genre' => 'Fantasy',
        ],
        [
            'title' => 'It',
            'author' => 'Stephen King',
            'year' => '1986',
            'cover' => 'https://d3525k1ryd2155.cloudfront.net/h/932/716/1391716932.0.m.jpg',
            'genre' => 'Horror',
        ],
        [
            'title' => 'Dracula',
            'author' => 'Bram Stoker',
            'year' => '1897',
            'cover' => 'https://m.media-amazon.com/images/I/51F49MFtd8L.jpg',
            'genre' => 'Horror',
        ],
        [
            'title' => 'La metamorfosi',
            'author' => 'Franz Kafka',
            'year' => '1915',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStm4TaUhai3yxSalF4hqpGguNz-Nc82hNASw&usqp=CAU',
            'genre' => 'Fantasy',
        ],
        [
            'title' => 'Il codice da Vinci',
            'author' => 'Dan Brown',
            'year' => '2003',
            'cover' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgClvCGyw5w3swTb1tD4KbDERgmHDU7rWPLg&usqp=CAU',
            'genre' => 'Thriller',
        ],
        [
            'title' => 'Il silenzio degli innocenti',
            'author' => 'Thomas Harris',
            'year' => '1988',
            'cover' => 'data:image/jpeg;base64,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',
            'genre' => 'Thriller',
        ],
    ];
?>