function getMax(arr) {
  var max = arr[0];
  for (var i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }
  return max;
}

function numberLength(num) {
  var mod = 10;
  var count = 1;
  var result;
  while (result !== num && num % 10 !== num) {
    mod *= 10;
    count++;
    result = num % mod;
  }
  return count;
}

function radixSort(arr) {
  var max = getMax(arr);
  var numLength = numberLength(max);
  var m = 10;
  for (var i = 1; i < Math.pow(10, numLength); i *= 10) {
    var radixSorted = [];
    var buckets = new Array(
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        [],
        []
        );
    for (var j = 0; j < arr.length; j++) {
      var index = arr[j];
      index %= m;
      index /= i;
      index = Math.floor(index);
      buckets[index].push(arr[j]);
    }

    for (var k = 0; k < buckets.length; k++) {
      if (buckets[k]) {
        for (var n = 0; n < buckets[k].length; n++) {
          radixSorted.push(buckets[k][n]);
        }
      }
    }
    arr = radixSorted;
    m *= 10;
  }
  return arr;
}

var arr = [50, 32, 2, 77, 25];
console.log("Given array of 50, 32, 2, 77, 25\n");
console.log(radixSort(arr));

