<?php error_reporting(-1);

    /*
    Напишите функцию str_count($str, $substr), которая принимает 2 аргумента: строку и подтсроку. Функция должна возвращать кол-во вхождений подстроки в строку. Пример: 'hello', 'l' => 2
    */

    function str_count($str, $substr)
    {
        $result = 0;
        $arr = str_split($str);

        foreach ($arr as $item) {
            if ($item === $substr) {
                $result++;
            }
        }

        return $result;
    }

    /*
    Напишите функцию no_space(string $str): string, которая принимает аргументом строку и возвращает строку с удаленными пробелами
    */

    function no_space(string $str): string
    {
        $arr = str_split($str);
        $result = '';

        foreach ($arr as $item) {
            if ($item !== ' ') {
                $result .= $item;
            }
        }

        return $result;
    }

//  echo no_space('Hello my React  !!!!');

    /*
    Напишите функцию max_number(int $num): int, которая принимает аргументом число возвращает максимальное число из цифр, полученного аргумента. Пример: 123 => 321
    */

    function max_number(int $num)
    {
        $str = $num . '';
        $arr = str_split($str);
        $max = count($arr);
        $count = 0;
        // 123

        for ($i = 0; $i < $max; $i++) {
            echo $i . ': ' . $arr[$i] . '<br>';

            $next = $i + 1;
            $count = $count + 1;

            if ($next === $max) break;

            if ($arr[$i] < $arr[$next]) {
                [$arr[$i], $arr[$next]] = [$arr[$next], $arr[$i]];
            }
        }

        $str = implode($arr);
        $num = (int)$str;

        if ($count < $max) {
            max_number($num);
        }

        echo (int)implode($arr);
    }

    max_number(123);