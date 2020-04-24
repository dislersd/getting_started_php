<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 

  class Book {
    var $title;
    var $author;
    var $pages;

    function __construct($name){
      echo "$name <br>";
    }
  }

  $nookBook = new Book("Mike");
  $nookBook->title = "Nooks Cranny";
  $nookBook->author = "Nooky Nielson";
  $nookBook->pages = 400;
  
  $nookBook = new Book("Tom");
  $nookBook->title = "Harry Potter";
  $nookBook->author = "JK Rowling";
  $nookBook->pages = 460;


  ?>
</body>
</html>