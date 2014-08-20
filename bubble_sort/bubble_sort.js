function bubble_sort(array) {
  do {
    var switch_count = 0;
    for (var i = 0; i < array.length - 1; i++) {
      if(array[i] > array[i+1]) {
        var temp = array[i+1];
        array[i+1] = array[i];
        array[i] = temp;
        switch_count++;
      }
    }
  } while(switch_count > 0);
  return array;
}

console.log(bubble_sort([50, 32, 2, 77, 25]));
