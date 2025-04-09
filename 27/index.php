<?php error_reporting(-1);
  
  // выдаст ошибку, потому как подключаем несуществующий файл
  // include './functs2.php';
  // echo 'Hello';
  
  // выдаст ошибку, потому как подключаем несуществующий файл, но оператор подавления ее скроет
  // @include './functs2.php';
  // echo 'Hello';
  
  // отработает без ошибки
  //include 'functs.php';
  //echo get_table(5, 7);
  
  // отработает без ошибки, только один раз и только при вызове одной функции несколько раз
  //include once 'functs.php';
  //include once 'functs.php';
  //echo get_table(5, 7);
  
  // отработает с ошибкой
  //require 'functs2.php';
  //echo get_table(5, 5);
  
  // отработает без ошибки
  //require 'functs.php';
  //echo get_table(5, 5);
  
  // отработает без ошибки, только один раз и только при вызове одной функции несколько раз
  //require once 'functs.php';
  //require once 'functs.php';
  //echo get_table(5, 5);