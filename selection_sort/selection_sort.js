function selection_sort(array) {
  for(var i = 0; i < array.length - (1 + i); i++) {
    var min = array[i];
    var max = array[i];
    var swap_index_max, swap_index_min, temp;
    for (var j = i; j < array.length - (1 + i); j++) {
      if (array[j+1] < min) {
        min = array[j+1];
        swap_index_min = j+1;
      }
      if (array[j+1] > max) {
        max = array[j+1];
        swap_index_max = j+1;
      }
    }
    temp = array[i];
    array[i] = min;
    array[swap_index_min] = temp;

    temp = array[array.length - (1 + i)];
    array[array.length - (1 + i)] = max;
    array[swap_index_max] = temp;
  }
  return array;
}

console.log(selection_sort([50, 32, 2, 77, 25]));
