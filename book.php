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
  echo $harryPotter->pages, "<br>";
  ?>


  <?php
    class Student {
      var $name;
      var $study;
      var $gpa;

      function __construct($name, $study, $gpa) {
        $this->name = $name;
        $this->study = $study;
        $this->gpa = $gpa;
      }

      function hasHonors(){
        if ($this->gpa >= 3.5) {
          return "true";
        }
        return "false";
      }
    }

    $student1 = new Student("Jim", "art", 3.4);
    $student2 = new Student("Pam", "business", 3.9);

    echo $student1->hasHonors(), "<br>";
    echo $student2->hasHonors(), "<br>";
  ?>

</body>
</html>