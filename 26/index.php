<?php error_reporting(-1);
  
  /*
   Напишите функцию get_count($arr), принимающую параметром массив, которая будет возвращать кол-во элементов, полученного массива.
   */
  
  $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
  
  $goods = [
    [
      'title' => 'Nokia',
      'price' => 100,
      'qty' => 10
    ],
    [
      'title' => 'Sony',
      'price' => 120,
      'qty' => 7
    ],
    [
      'title' => 'LG',
      'price' => 105,
      'qty' => 15
    ],
  ];
  
  function get_count($arr)
  {
    $result = 0;
    
    foreach ($arr as $item) {
      $result += 1;
    }
    
    return $result;
  }
  
  print_r(get_count($arr));
  echo '<br>';
  print_r(get_count($goods));
  
  /*
    Напишите функцию, принимающую 2 параметра, которая выведет таблицу умножения по полученным множителям
   */

function multiply(int $num1, int $num2)
{
  $tr = 1;
  
  $table = "<table border='1' width='50%'>";
  
  while ($tr <= $num1) {
    $td = 1;
    
    $table .= "<tr>";
    
    while ($td <= $num2) {
      $table .= "<td> $tr * $td = " . $tr * $td . "</td>";
      $td++;
    }
    
    $table .= "</tr>";
    
    $tr++;
  }
  
  $table .= "</table>";
  
  return $table;
}
  
  echo multiply(5, 5);