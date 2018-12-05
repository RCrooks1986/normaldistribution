<?php
//Define the terms by default if they're not already specified
if (isset($mean) == false)
  $mean = 0;
if (isset($sd) == false)
  $sd = 1;
if (isset($values) == false)
  $values = 10;

$maximum = mt_getrandmax();
echo $maximum;
?>
