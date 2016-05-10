<?php
$a = ['A'=>1, 3=>2, 'Z'=>'Hello','B'=>4,1=>'いち'];
var_dump($a);
echo "<br />";
foreach ( $a as $key => $value) {
  echo $key .",". $value ."<br />";
}
?>
