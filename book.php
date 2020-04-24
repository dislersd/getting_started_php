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

    function __construct($aTitle, $aAuthor, $aPages){
      $this->title = $aTitle;
      $this->author = $aAuthor;
      $this->pages = $aPages;
    }
  }

  

  $nookBook = new Book("Nooks Cranny","Nooky Nielson",400);
  $harryPotter = new Book("Harry Potter","JK Rowling",460);

  echo $nookBook->author, "<br>";
  echo $harryPotter->pages;
  ?>
</body>
</html>