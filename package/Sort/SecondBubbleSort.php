<?php
$array = [123, 45, 678, 35, 64, 99, 0, 12, 999, 435];
$string = 'string';

$array = bubbleSort($array, 'asc');
var_dump($array);


/**
 * 冒泡排序
 * @param $array
 * @param string $order
 * @return array|bool
 */

function bubbleSort($array, $order = 'asc')
{
    if (!is_array($array)) {
        return false;
    }

    $count = count($array);
    $order = in_array($order, ['asc', 'desc']) ? $order : 'asc';
    for ($i = 1; $i < $count; $i++) {
        for ($j = 0; $j < ($count - 1); $j++) {
            if (($array[$j] < $array[$i]) && $order == 'desc') {
                list($array[$i], $array[$j]) = [$array[$j], $array[$i]];
            }
            if (($array[$j] > $array[$i]) && $order == 'asc') {
                list($array[$i], $array[$j]) = [$array[$j], $array[$i]];
            }
        }
    }

    return $array;
}