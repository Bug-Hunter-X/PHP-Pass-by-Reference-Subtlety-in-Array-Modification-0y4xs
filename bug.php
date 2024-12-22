function increment_array(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array($arr);
print_r($arr); // Output: [2, 3, 4]

$arr = [1, 2, 3];
$arr2 = $arr;
increment_array($arr2);
print_r($arr); // Output: [1, 2, 3] - Expected [2, 3, 4]