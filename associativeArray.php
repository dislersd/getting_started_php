<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="associativeArray.php" method="post">
    <input type="text" name="student">
    <input type="submit">
  </form>

  <?php
    // Associative Array: Kind of like an object in JS
    // Syntaxt: array("key"=>"value", "key"=>"value")
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades[$_POST["student"]];
  ?>
</body>
</html>