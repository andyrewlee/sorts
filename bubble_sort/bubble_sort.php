<?php

function bubble_sort($arr) {
  $time_start = microtime(true);
  do {
    $switch_count = 0;
    for ($i = 0; $i < count($arr) - 1; $i++) {
      if ($arr[$i] > $arr[$i+1]) {
        $temp = $arr[$i + 1];
        $arr[$i + 1] = $arr[$i];
        $arr[$i] = $temp;
        $switch_count += 1;
      }
    }
  } while($switch_count > 0);
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo "The sorting took: " . $time . " seconds!\n";
  return $arr;
}

$array_of_10000 = array();
for ($i = 0; $i < 10000; $i++) {
  $array_of_10000[] = rand(0, 100);
}

echo "Time it takes to sort 10000\n";
bubble_sort($array_of_10000);

$arr = array(50, 32, 2, 77, 25);
echo "Given array of 50, 32, 2, 77, 25\n";
var_dump(bubble_sort($arr));

?>
