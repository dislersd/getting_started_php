<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch</title>
</head>
<body>
  <form action="switch.php" method="post">
    <input type="text" name="grade">
    <input type="submit" value="click me">
  </form>


</body>
</html>


<?php
  $grade = $_POST["grade"];

  switch($grade){
    case "A":
      echo "You did amazing! <br>";
      break;
    case "B":
      echo "You did pretty good <br>";
    default:
      echo "Invalid Grade <br>";
  }


  $index = 1;

  while ($index <= 5){
    echo "$index <br>";
    $index++;
  }

  for ($i = 0; $i <=5; $i++) {
    echo "$i <br>";
  }
?>  