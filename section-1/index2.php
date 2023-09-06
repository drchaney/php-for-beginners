<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>
<body style="display: grid; place-items: center; height: 100vh; margins: 0; font-family: sans-serif;">
  
  <?php
    $name = "David";
    $awesome = false;
    if ($awesome){
      $message = "$name is awesome!";
    } else {
      $message = "$name is definitely awesome";
    }
  ?>

  <h1>
    <?= $message; ?>
  </h1>

</body>
</html>