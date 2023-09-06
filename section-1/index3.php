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
      "Project: Hail Mary",
      "Clean Code",
      "The Martian"
    ];
  ?>

  <h1>Books!</h1>
  <ul>
    <?php 
      foreach ($books as $book){
        echo "<li>{$book}</li>";
      }
    ?>
  </ul>

  <ul>
    <?php 
      foreach ($books as $book) : ?>
        <li><?= $book ?></li>
    <?php endforeach; ?>
  </ul>

  <div>
    <?php
      echo $books[1];
    ?>
  </div>

</body>
</html>