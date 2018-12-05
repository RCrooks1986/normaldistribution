<?php
include_once '../functions/maths-functions.php';

//Function to turn a digit into an approximate number of SDs from percentage (in decimal form) on the normal distribution
function percenttosds($percent)
  {
  //Array to store how percentage maps onto SD
  $distarray = array();
  $distarray[0] = array("SD"=>-6.12,"Digit"=>0.00000000047);
  $distarray[1] = array("SD"=>-6,"Digit"=>0.00000000099);
  $distarray[2] = array("SD"=>-5,"Digit"=>0.00000028665);
  $distarray[3] = array("SD"=>-4,"Digit"=>0.00003167124);
  $distarray[4] = array("SD"=>-3,"Digit"=>0.00134989803);
  $distarray[5] = array("SD"=>-2.9,"Digit"=>0.00186581330);
  $distarray[6] = array("SD"=>-2.8,"Digit"=>0.00255513033);
  $distarray[7] = array("SD"=>-2.7,"Digit"=>0.00346697380);
  $distarray[8] = array("SD"=>-2.6,"Digit"=>0.00466118802);
  $distarray[9] = array("SD"=>-2.5,"Digit"=>0.00620966533);
  $distarray[10] = array("SD"=>-2.4,"Digit"=>0.00819753592);
  $distarray[11] = array("SD"=>-2.3,"Digit"=>0.01072411002);
  $distarray[12] = array("SD"=>-2.2,"Digit"=>0.01390344751);
  $distarray[13] = array("SD"=>-2.1,"Digit"=>0.01786442056);
  $distarray[14] = array("SD"=>-2,"Digit"=>0.02275013195);
  $distarray[15] = array("SD"=>-1.9,"Digit"=>0.02871655982);
  $distarray[16] = array("SD"=>-1.8,"Digit"=>0.03593031911);
  $distarray[17] = array("SD"=>-1.7,"Digit"=>0.04456546276);
  $distarray[18] = array("SD"=>-1.6,"Digit"=>0.05479929170);
  $distarray[19] = array("SD"=>-1.5,"Digit"=>0.06680720127);
  $distarray[20] = array("SD"=>-1.4,"Digit"=>0.08075665923);
  $distarray[21] = array("SD"=>-1.3,"Digit"=>0.09680048459);
  $distarray[22] = array("SD"=>-1.2,"Digit"=>0.11506967022);
  $distarray[23] = array("SD"=>-1.1,"Digit"=>0.13566606095);
  $distarray[24] = array("SD"=>-1,"Digit"=>0.15865525393);
  $distarray[25] = array("SD"=>-0.9,"Digit"=>0.18406012535);
  $distarray[26] = array("SD"=>-0.8,"Digit"=>0.21185539858);
  $distarray[27] = array("SD"=>-0.7,"Digit"=>0.24196365222);
  $distarray[28] = array("SD"=>-0.6,"Digit"=>0.27425311775);
  $distarray[29] = array("SD"=>-0.8,"Digit"=>0.21185539858);
  $distarray[30] = array("SD"=>-0.7,"Digit"=>0.24196365222);
  $distarray[31] = array("SD"=>-0.6,"Digit"=>0.27425311775);
  $distarray[32] = array("SD"=>-0.5,"Digit"=>0.30853753873);
  $distarray[33] = array("SD"=>-0.4,"Digit"=>0.34457825839);
  $distarray[34] = array("SD"=>-0.3,"Digit"=>0.38208857781);
  $distarray[35] = array("SD"=>-0.2,"Digit"=>0.42074029056);
  $distarray[36] = array("SD"=>-0.1,"Digit"=>0.46017216272);
  $distarray[37] = array("SD"=>0,"Digit"=>0.50000000000);
  $distarray[38] = array("SD"=>0.1,"Digit"=>0.53982783728);
  $distarray[39] = array("SD"=>0.2,"Digit"=>0.57925970944);
  $distarray[40] = array("SD"=>0.3,"Digit"=>0.61791142219);
  $distarray[41] = array("SD"=>0.4,"Digit"=>0.65542174161);
  $distarray[42] = array("SD"=>0.2,"Digit"=>0.57925970944);
  $distarray[43] = array("SD"=>0.3,"Digit"=>0.61791142219);
  $distarray[44] = array("SD"=>0.4,"Digit"=>0.65542174161);
  $distarray[45] = array("SD"=>0.5,"Digit"=>0.69146246127);
  $distarray[46] = array("SD"=>0.6,"Digit"=>0.72574688225);
  $distarray[47] = array("SD"=>0.7,"Digit"=>0.75803634778);
  $distarray[48] = array("SD"=>0.8,"Digit"=>0.78814460142);
  $distarray[49] = array("SD"=>0.9,"Digit"=>0.81593987465);
  $distarray[50] = array("SD"=>1,"Digit"=>0.84134474607);
  $distarray[51] = array("SD"=>1.1,"Digit"=>0.86433393905);
  $distarray[52] = array("SD"=>1.2,"Digit"=>0.88493032978);
  $distarray[53] = array("SD"=>1.3,"Digit"=>0.90319951541);
  $distarray[54] = array("SD"=>1.4,"Digit"=>0.91924334077);
  $distarray[55] = array("SD"=>1.2,"Digit"=>0.88493032978);
  $distarray[56] = array("SD"=>1.3,"Digit"=>0.90319951541);
  $distarray[57] = array("SD"=>1.4,"Digit"=>0.91924334077);
  $distarray[58] = array("SD"=>1.5,"Digit"=>0.93319279873);
  $distarray[59] = array("SD"=>1.6,"Digit"=>0.94520070830);
  $distarray[60] = array("SD"=>1.7,"Digit"=>0.95543453724);
  $distarray[61] = array("SD"=>1.8,"Digit"=>0.96406968089);
  $distarray[62] = array("SD"=>1.9,"Digit"=>0.97128344018);
  $distarray[63] = array("SD"=>2,"Digit"=>0.97724986805);
  $distarray[64] = array("SD"=>2.1,"Digit"=>0.98213557944);
  $distarray[65] = array("SD"=>2.2,"Digit"=>0.98609655249);
  $distarray[66] = array("SD"=>2.3,"Digit"=>0.98927588998);
  $distarray[67] = array("SD"=>2.4,"Digit"=>0.99180246408);
  $distarray[68] = array("SD"=>2.2,"Digit"=>0.98609655249);
  $distarray[69] = array("SD"=>2.3,"Digit"=>0.98927588998);
  $distarray[70] = array("SD"=>2.4,"Digit"=>0.99180246408);
  $distarray[71] = array("SD"=>2.5,"Digit"=>0.99379033467);
  $distarray[72] = array("SD"=>2.6,"Digit"=>0.99533881198);
  $distarray[73] = array("SD"=>2.7,"Digit"=>0.99653302620);
  $distarray[74] = array("SD"=>2.8,"Digit"=>0.99744486967);
  $distarray[75] = array("SD"=>2.9,"Digit"=>0.99813418670);
  $distarray[76] = array("SD"=>3,"Digit"=>0.99865010197);
  $distarray[77] = array("SD"=>4,"Digit"=>0.99996832876);
  $distarray[78] = array("SD"=>5,"Digit"=>0.99999971335);
  $distarray[79] = array("SD"=>6,"Digit"=>0.99999999901);
  $distarray[80] = array("SD"=>6.12,"Digit"=>0.99999999953);

  //Strart loop at halfway if it is greater than 0.5
  if ($percent < 0.5)
    $distarraykey = 0;
  elseif ($percent >= 0.5)
    $distarraykey = 37;

  //Loop through array to find where on the curve the value is found
  $stop = false;
  while (($distarraykey < 80) AND ($stop == false))
    {
    //Find out if upper and lower digits sandwich the supplied percentage
    $lowerdigit = $distarray[$distarraykey]["Digit"];
    $higherdigit = $distarray[$distarraykey+1]["Digit"];
    if (($lowerdigit <= $percent) AND ($higherdigit >= $percent))
      {
      $stop = true;
      $lowersd = $distarray[$distarraykey]["SD"];
      $highersd = $distarray[$distarraykey+1]["SD"];
      }
    $distarraykey++;
    }

  //Normalise the percentage, use that to find the SD
  $normalisedigit = normalisevalue($percent,$lowerdigit,$higherdigit);
  $midsd = $highersd-$lowersd;
  $sdadjust = $normalisedigit*$midsd;
  $outputsd = $lowersd+$sdadjust;
  Return $outputsd;
  }

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
$digit = randomdigit(false,$maximum);
$sd = percenttosds($digit);
echo "Randomly Generated Digit: " . $digit . "<br>";
echo "Standard Deviation: " . $sd . "<br>";
?>
