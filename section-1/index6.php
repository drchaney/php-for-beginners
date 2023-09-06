<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>
<body style="display: grid; place-items: center; height: 100vh; margins: 0; font-family: sans-serif;">
  
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
      return $book['releaseYear'] >= 2021;
    });
  ?>

<ul>
  <?php foreach ($books as $book) : ?>
    <li><a href=
      "<?= $book['purchaseUrl']; ?>">
      <?= $book['name']; ?>
      </a>
    </li>
  <?php endforeach ?>
  </ul>

<ul>
  <?php foreach ($filteredBooks as $book) : ?>
    <li>
      <a href="<?=$book['purchaseUrl']; ?>"> 
        <?=$book['name'] . " - by " . $book['author'] ;?>
      </a>
    </li>
  <?php endforeach ?>
</ul>

</body>
</html>