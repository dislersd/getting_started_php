<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cool</title>
</head>
<body>
  <?php
    $title = "My First Post";
    $author = "Dylan";
    $wordCount = "340";
    include "article-header.php";
  ?>
  <br>
  <?php
    include "useful-tools.php";
    sayAge(28);
  ?>
</body>
</html>