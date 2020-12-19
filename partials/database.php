<?php

    $database = [
        [
            'title' => 'New Jersey',
            'author' => 'Bon Jovi',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
            'genre' => 'Rock'
        ],
        [
            'title' => 'Live at Wembley 86',
            'author' => 'Queen',
            'year' => 1992,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Ten\'s Summoner\'s Tales',
            'author' => 'Sting',
            'year' => 1993,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
            'genre' => 'Pop'
        ],
        [
            'title' => 'Steve Gadd band',
            'author' => 'Steve Gadd Band',
            'year' => 2018,
            'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
            'genre' => 'Jazz'
        ],
        [
            'title' => 'And Justice for All',
            'author' => 'Metallica',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg',
            'genre' => 'Metal'
        ],
        [
            'title' => 'One more car, one more rider',
            'author' => 'Eric Clapton',
            'year' => 2002,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
            'genre' => 'Rock'
        ]
    ];

    header('Content-Type: application/json');



    if( ! empty($_GET['artist']) &&  $_GET['artist'] !== 'all'){
          
         $arr= array(); 

        foreach($database as $album){

            if(strtolower($album['author']) === strtolower($_GET['artist']) ){
                       array_push($arr, $album);   
            }
        }

        $database = $arr;
    }

    if( ! empty($_GET['genre']) &&  $_GET['genre'] !== 'all'){
          
        $genre= array(); 

       foreach($database as $type){

           if(strtolower($type['genre']) === strtolower($_GET['genre']) ){
                      array_push($genre, $type);   
           }
       }

       $database = $genre;
   }

    echo json_encode($database);

?>