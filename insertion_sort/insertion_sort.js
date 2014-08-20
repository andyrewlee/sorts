function insertion_sort(array) {
  for (var i = 0; i < array.length; i++) {
    var element = array[i];
    var j = i;

    while (j > 0 && array[j-1] > element) {
      array[j] = array[j-1];
      j -= 1;
    }
    array[j] = element;
  }
  return array;
}


var test_array = [50, 32, 2, 77, 25];
console.log(insertion_sort(test_array));
