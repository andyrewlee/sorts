<?php

function insertion_sort($arr) {
  $time_start = microtime(true);
  for($i = 1; $i < count($arr); $i++) {

    $element = $arr[$i];
    $j = $i;

    while($j > 0 && $arr[$j-1] > $element) {
      $arr[$j] = $arr[$j-1];
      $j -= 1;
    }
    $arr[$j] = $element;
  }
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
insertion_sort($array_of_10000);

$arr = array(50, 32, 2, 77, 25);
echo "Given array of 50, 32, 2, 77, 25\n";
var_dump(insertion_sort($arr));

?>
