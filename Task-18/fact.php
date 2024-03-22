<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $number = (int)$_POST['number']; 
  function factorial($n) {
    if ($n === 0) {
      return 1;
    } else {
      return $n * factorial($n - 1);
    }
  }
  $factorial = factorial($number);

  echo "The factorial of $number is: $factorial";
} else {
  echo "Please submit a number to calculate its factorial.";
}
?>
