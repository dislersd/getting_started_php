<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $friends = array("Kevin", "Jimmy", "Sarah", "Bob");
    echo $friends[0], "<br>"; // -> Kevin
    echo count($friends), "<br>"; // -> 4
    echo '<pre>'; print_r($friends); echo '</pre>';

    foreach($friends as $friend) {
      echo $friend, "<br>";
    }

  ?>
</body>
</html>