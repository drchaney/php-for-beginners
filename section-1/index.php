<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo</title>
</head>
<body">
  <h1>
    <?php echo "Hello, World!"; ?>
  </h1>
  <div><?php echo "David was here!"; ?></div>
  <div><?php echo "David " . "here!"; ?></div>
  <div>
    <?php 
      $name = "David";
      echo $name . " " . "was here";
    ?>
  </div>
  <div>
    <?php 
      $greeting = "Sup dude";
      echo "$greeting, David is awesome";
    ?>
  </div>
  <div>
    <?php 
      $singleQuote = "singleQuote";
      echo '$greeting, single quotes will not evaluate variables';
    ?>
  </div>




</body>
</html>