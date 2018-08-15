<?php
// Default string
$str = "setyagus   sucipto   sedang makan";
// Print string
echo "<pre>".$str."<pre>";
// Scratch method
// ----------------------------------------
// Split string
$splitstr = str_split($str);

// Print string
$str="";
$n = 0;

for ($x = sizeof($splitstr)-1; $x >= 0; $x--) {
  $n++;
  echo "</br>Step $n : ";
  $str=$str.$splitstr[$x];
echo "<pre>".$str."<pre>";
}

// $str = str_replace("%_%"," ",$str);
// Print string

echo "<pre>".$str."<pre></br>";
?>