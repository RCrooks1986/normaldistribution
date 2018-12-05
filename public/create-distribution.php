<?php
include_once '../functions/maths-functions.php';

//Define the terms by default if they're not already specified
if (isset($mean) == false)
  $mean = 0;
if (isset($sd) == false)
  $sd = 1;
if (isset($values) == false)
  $values = 10;

//Limit the maximum possible range for generating random numbers to 2147483647 due to array size
$maximum = mt_getrandmax();
if ($maximum > 2147483647)
  $maximum = 2147483647;

//Retrieve random digit
echo randomdigit(false,$maximum);
?>
