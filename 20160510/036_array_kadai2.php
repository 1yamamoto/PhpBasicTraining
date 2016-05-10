<?php
$a = array( "しりとり", "りす", "すいか", "かさ", "さけ" );

foreach ( $a as $value ) {
  echo $value ."<br>";
}

echo "<br>";

$a[5]="研修";
foreach ( $a as $key=>$value ) {
  echo $key . " " . $value ."<br>";
}

?>
