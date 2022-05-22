
<?php 
require_once('Apt10.php'); 

$array = [100,2,3,4,5,7];
echo "<p>".implode(', ', $array).'</p>';
$obj = new Apt10($array);
?>