<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // Working with strings

    $phrase = "Hello People";
    echo strtolower($phrase), "<br>"; // hello people
    echo strlen($phrase), "<br>"; // --> 12
    echo $phrase[1], "<br>"; // --> e
    echo str_replace("People", "World", $phrase), "<br>"; // --> Hello World
    echo substr($phrase, 6), "<br>"; // --> People

    // Working with numbers
    // num types: integer -> 40 and decimal(floating point) -> 40.7

    echo 5 * 5, "<br>";
    // power
    echo 5 ** 3, "<br>";
    // absolute value
    echo abs(-100), "<br>";
    // square root
    echo sqrt(100), "<br>";
    // find max
    echo max(20, 10), "<br>";
    // rounding
    echo ceil(3.2), "<br>";
  ?>

  <!-- Input from users -->

  <form action="site.php" method="get">
    Name: <input type="text" name="name">
    <br>
    Age: <input type="number" name="age">
    <br>
    Password: <input type="password" name="password">
    <input type="submit">
  </form>
  
  <?php echo$_GET["name"] ?>
  <?php echo$_GET["age"] ?>
  <?php echo password_hash($_GET["password"], 1) ?>
</body>
</html>