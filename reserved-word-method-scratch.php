<?php
// Default string
$str = "setyagus   sucipto   sedang makan";
// Print string
echo "<pre>".$str."<pre>";

// SCRATCH METHOD
// ----------------------------------------
// Split string
$splitstr = str_split($str);
// Print string
$str="";
// Set number
$n = 0;
// Loop for reverse
for ($x = sizeof($splitstr)-1; $x >= 0; $x--) {
	$n++;
  	echo "</br>Step $n : ";
  	$str=$str.$splitstr[$x];
	echo "<pre>".$str."<pre>";
}
// ----------------------------------------

// Print string
echo "<pre>".$str."<pre></br>";
?>