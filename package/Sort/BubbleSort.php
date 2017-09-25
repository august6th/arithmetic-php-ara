<?php
/**
 * BubbleSort PHP实现冒泡排序
 * @param array $container 需要排序的数组
 * @return mixed $container 返回排序后的数组或者返回 false
 *
 * ----------------------------------------
 * 关于冒泡排序的一些总结
 * ----------------------------------------
 * 我们需要排序的数组中总共有 $count 个数字
 * 我们总共进行冒泡排序的轮数为 $count - 1 轮
 * 每一轮之所以遍历数组中的从 0 ~ ($count - $j) 是因为
 * 在上一轮的遍历中，该轮的最大值已经冒泡到了最上面，就不用在下一轮中再判断它的大小。
 * 例子如下：
 * 数组 [20, 10, 7, 5]
 * 共 4 个数，但我们只需要 3 轮排序。
 * 第一轮
 *  [索引]   0  1  2 3
 *  [数组]   20 10 7 5
 *           -----
 *          10 20 7 5
 *             -----
 *          10 7 20 5
 *               -----
 *          10 7 5 20
 *                      end
 * （其他轮数这里不做描述了）
 * 你会发现，在第一轮结束的时候，该轮中最大的数组 20 已经冒泡到最顶部。
 * 下一轮再不需要它了。
 *
 *  ps:
 *  如果 $container 参数在传入函数时，就指定了其类型，即：
 *  function BubbleSort(array $container)
 *  这个时候如果你再向该函数内传入其他类型参数，会报错。
 *
 */

function BubbleSort($container)
{
    if (is_array($container)) {
        $count = count($container);
        for ($j = 1; $j < $count; $j++) {
            for ($i = 0; $i < $count - $j; $i++) {
                if ($container[$i] > $container[$i + 1]) {
                    $temp = $container[$i];
                    $container[$i] = $container[$i + 1];
                    $container[$i + 1] = $temp;
                }
            }
        }
        return $container;
    } else {
        return false;
    }
}

$array = [123,45,678,35,64,99,0,12,999,435];
$string = 'string';
$array_sort = BubbleSort($array);
$string_sort = BubbleSort($string);

echo "<pre>";
print_r($array_sort);
echo "</pre>";
var_dump($string_sort);
