<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Tutorial</title>
</head>
<body style="display: grid; place-items: center; height: 100vh; margins: 0; font-family: sans-serif;">
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