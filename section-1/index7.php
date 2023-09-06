<?php

  $books = [
    [
      'name'=>'Project Hail Mary',
      'author'=>'Andy Wire',
      'releaseYear' => '2021',
      'purchaseUrl' => 'http://projhailmary.com'
    ],
    [
      'name'=>'The Martian',
      'author'=>'Andy Weer',
      'releaseYear' => '2011',
      'purchaseUrl' => 'http://martian.com'
    ],
    [
      'name'=>'Artemis',
      'author'=>'Andy Weir',
      'releaseYear' => '2015',
      'purchaseUrl' => 'http://artemis.com'
    ],
  ];

  $filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 2000;
  });

  require "index.view.php";