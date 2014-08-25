<?php

function get_max($array)
{
    $max = $array[0];
    foreach ($array as $value)
    {
        if($value > $max)
        {
            $max = $value;
        }
    }
    return $max;
}

function get_min($array)
{
    $min = $array[0];
    foreach ($array as $value)
    {
        if($value < $min)
        {
            $min = $value;
        }
    }
    return $min;

}

function min_swap($array, $min_index, $i)
{
    $temp = $array[$i];
    $array[$i] = $array[$min_index];
    $array[$min_index] = $temp;
    return $array;
}


function max_swap($array, $max_index, $i)
{
    $temp = $array[count($array) -1];
    $array[count($array) - 1] = $array[$max_index];
    $array[$max_index] = $temp;
    return $array;
}

$test = array(7,0,2);

function selection_sort($array)
{
    $min = get_min($array);
    $min_index = array_search($min, $array);
    $first_swap_array = min_swap($array, $min_index, 0);

    $max = get_max($first_swap_array);
    $max_index = array_search($max, $first_swap_array);
    $second_swap_array = max_swap($first_swap_array, $max_index, 0);

    var_dump($second_swap_array);

}

selection_sort(array(7,0,2));











?>
