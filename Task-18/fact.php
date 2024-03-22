<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Get the number from the form
  $number = (int)$_POST['number'];  // Cast to integer for safety

  // Function to calculate factorial (recursive approach)
  function factorial($n) {
    if ($n === 0) {
      return 1;
    } else {
      return $n * factorial($n - 1);
    }
  }

  // Calculate the factorial
  $factorial = factorial($number);

  // Display the result
  echo "The factorial of $number is: $factorial";
} else {
  // Display an error message if the form wasn't submitted
  echo "Please submit a number to calculate its factorial.";
}
?>
