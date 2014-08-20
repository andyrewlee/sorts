<?php

function get_max($arr) {
  $max = $arr[0];
  for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $max) {
      $max = $arr[$i];
    }
  }
  return $max;
}

function number_length($num) {
  $mod = 10;
  $count = 1;
  while ($result !== $num && $num % 10 !== $num) {
    $mod *= 10;
    $count++;
    $result = $num % $mod;
  }
  return $count;
}

function radix_sort($arr) {
  $time_start = microtime(true);
  $max = get_max($arr);
  $number_length = number_length($max);
  $m = 10;
  for ($i = 1; $i < pow(10, $number_length); $i *= 10) {
    $radix_sorted = array();
    $buckets = array(
      array(),
      array(),
      array(),
      array(),
      array(),
      array(),
      array(),
      array(),
      array(),
      array()
    );
    for ($j = 0; $j < count($arr); $j++) {
      $index = $arr[$j];
      $index %= $m;
      $index /= $i;
      $index = floor($index);
      $buckets[$index][] = $arr[$j];
    }
    foreach($buckets as $bucket) {
      if ($bucket == true) {
        foreach($bucket as $value) {
          $radix_sorted[] = $value;
        }
      }
    }
    $arr = $radix_sorted;
    $m *= 10;
  }
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo "The sorting took: " . $time . " seconds!\n";
  return $arr;
}

function generate_random_values($num) {
  $random_values = array();
  for ($i = 0; $i < $num; $i++) {
    $random_values[] = rand(1, 1000);
  }
  return $random_values;
}

echo "Time it takes to sort 10000\n";
radix_sort(generate_random_values(10000));

$arr = array(50, 32, 2, 77, 25);
echo "Given array of 50, 32, 2, 77, 25\n";
var_dump(radix_sort($arr));

?>
