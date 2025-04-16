<?php error_reporting(-1);
  
  /*
   Дан массив:
  $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
  Напишите свой вариант функции count() - user_count() - которая будем принимать аргументом одномерный массив и возвращать кол-во элементов массива (длину массива)
   */
  
  function user_count($arr) {
    $result = 0;
    
    foreach ($arr as $item) {
      $result += 1;
    }
    
    return $result;
  }
  
  $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
  echo user_count($nums) . '<br>';
  
  /*
   Дан массив:
  $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
  Подсчитайте сумму значений элементов массива. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 */
  
  function sum($arr) {
    $result = 0;
    
    foreach ($arr as $item) {
      $result += $item;
    }
    
    return $result;
  }
  
  $nums = [1, 2, 3, 1, 4, 5, 3, 2, 6, 7, 7, 8, 8, 9, 2, 5];
  echo array_sum($nums) . '<br>';
  echo sum($nums) . '<br>';
  
  /*
   Создайте массив из чисел от 1 до 100. Попробуйте написать 2 варианта решения: со специальной функцией и без нее
 */

function array_nums($start, $finish) {
  $a = $start;
  $result = [];
  
  while($a <= $finish) {
    $result[] = $a;
    
    $a++;
  }
  
  return $result;
}
  
  echo '<pre>' . print_r(array_nums(1, 100), 1) . '</pre>';
  print_r(range(1, 100));