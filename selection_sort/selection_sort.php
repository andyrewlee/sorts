<?php

function selection_sort($arr) {
  $time_start = microtime(true);
  for ($i = 0; $i < count($arr) - 1; $i++) {
    $min = $arr[$i];
    for ($j = $i; $j < count($arr) - 1; $j++) {
      if ($arr[$j+1] < $min) {
        $min = $arr[$j+1];
        $swap_index = $j+1;
      }
    }
    $temp = $arr[$i];
    $arr[$i] = $min;
    $arr[$swap_index] = $temp;
  }
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo "The sorting took: " . $time . " seconds!\n";
  return $arr;
}

$array_with_10000 = array();
for ($i=0; $i < 10000; $i++) {
  $array_with_10000[] = rand(1, 100);
}

echo "Time it takes to sort 10000\n";
selection_sort($array_with_10000);

echo "Given array of 50, 32, 2, 77, 25\n";
var_dump(selection_sort(array(50,32,2,77,25)));

?>
