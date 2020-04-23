<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $phrase = "Hello People";
    echo strtolower($phrase), "<br>"; // hello people
    echo strlen($phrase), "<br>"; // --> 12
    echo $phrase[1], "<br>"; // --> e
    echo str_replace("People", "World", $phrase), "<br>"; // --> Hello World
    echo substr($phrase, 6), "<br>"; // --> People
  ?>
</body>
</html>