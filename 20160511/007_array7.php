<?php

$a[0][1] = 'AA';
$a[0][2] = 'AB';
$a[0][3] = 'AC';
$a[1][1] = 'BA';
$a[1][2] = 'BB';
$a[1][3] = 'BC';
$a[2][1] = 'CA';
$a[2][2] = 'CB';
$a[2][3] = 'CC';

var_dump($a);

echo "<br>";
echo "<br>";

foreach( $a as $key1 => $val1 ){

  foreach( $val1 as $key2 => $val2 ){

    echo $key1. " ". $key2. " ".  $val2. "<br>";
  }
}

?>
