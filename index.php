
<?php 
require_once('Apt10.php'); 

$array = [100,2,37,4,5,6,710,8,9,3,55,41];
echo "<p>".implode(', ', $array).'</p>';
$obj = new Apt10($array);
?>