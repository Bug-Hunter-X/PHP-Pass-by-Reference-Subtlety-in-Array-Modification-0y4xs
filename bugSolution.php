To ensure consistent behavior, always modify the original array directly.  Avoid assigning references to new variables within the function's scope if the original array's modification is desired.

function increment_array_correctly(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_correctly($arr);
print_r($arr); // Output: [2, 3, 4]

$arr = [1, 2, 3];
$arr2 = $arr; // Assign the array to a new variable
increment_array_correctly($arr);
print_r($arr); // Output: [2, 3, 4] - Now it works as expected because we modified the original array