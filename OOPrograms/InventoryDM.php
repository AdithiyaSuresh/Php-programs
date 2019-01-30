<?php
$str = file_get_contents('inventoryDM.json');
$inventoryObject = json_decode($str);
//print_r($inventoryObject);
$json = json_encode($inventoryObject);
echo $json."\n";
?>