<?php

# index 0123456789012345

$name = "Stefanie Hatcher";
$length = strlen($name);
$cmp = strcmp($name, "Brian Le");
$index = Strpos($name, "e");
$first = substr($name, 9, 5);
$name = strtoupper($name);

echo $name."<br>";
echo $length."<br>";
echo $cmp."<br>";
echo $index."<br>";
echo $first."<br>";
echo $name."<br>";

?>