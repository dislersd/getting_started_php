<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="getpost.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
  </form>

  <?php
    // using post rather than get will not show data in url parameters
    echo $_POST["password"];
  ?>
</body>
</html>