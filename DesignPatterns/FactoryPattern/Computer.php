
<?php

abstract class Computer
{
	
	public abstract function getRAM();
	public abstract function getHDD();
	public abstract function getCPU();
	
	
    public function toString()
    {
		return "RAM = ".$this->getRAM().", HDD = ".$this->getHDD().", CPU = ".$this->getCPU();
	}
}
?>