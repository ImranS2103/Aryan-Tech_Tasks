<?php

// Declare an array of 10 integers
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Print the array in reverse order
echo "Reversed array: ";
for ($i = count($numbers) - 1; $i >= 0; $i--) {
  echo $numbers[$i] . " ";
}

?>
