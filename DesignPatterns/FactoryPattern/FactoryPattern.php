
<?php

require_once ('ComputerFactory.php');

$pc = ComputerFactory::getComputer("pc","2GB","500GB","2.4GHz");
$server = ComputerFactory::getComputer("server","16GB","1TB","2.9GHz");
echo "Factory PC Config:: ".$pc->toString()."\n";
echo "Factory Server Config:: ".$server->toString()."\n";

?>