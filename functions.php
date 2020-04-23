<?php

  // pretty much just like JS
  function sayHi($name, $age) {
    echo "Hello $name, you are $age <br>";
  }

  sayHi("Dylan", 28);
  sayHi("Lisa", 35);
  sayHi("Alex", 24);


  function cube($num) {
    return $num ** 3;
  }

  echo cube(4), "<br>";


  $add = function ($a, $b) {
    return $a + $b;
  };

  function hof ($x, $y, $func) {
    return $func($x, $y);
  };

  echo hof(3,10,$add);
?>