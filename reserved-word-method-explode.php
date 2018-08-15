<?php
// Default string
$str = "setyagus sucipto sedang makan";
// Print string
echo $str;
// Array reverse with explode
$ubah = array_reverse(explode(' ',$str));
// Join string
$str = join(' ',$ubah);
// Print string
echo $str;
?>