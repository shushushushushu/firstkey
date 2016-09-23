<?php
$tt=microtime();
echo $tt."<br/>";
function make_seed($t)
{
  list($usec, $sec) = explode(' ', $t);
  return (float) $sec + ((float) $usec);
}
echo make_seed($tt);
$randval = rand();
echo "<br/>".$randval;



