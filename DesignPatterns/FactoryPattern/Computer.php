
<?php

/**
  * abstract class car to provide basic car features
  */
abstract class Computer
{
	/**
	 * abstract function that has to be overrriden in child class
	 **/
	public abstract function getRAM();
	public abstract function getHDD();
	public abstract function getCPU();
	
	/**
	 * toString function to convert properties to a string
	 * @return ram,hdd,cpu in string format
	 **/
    public function toString()
    {
		return "RAM = ".$this->getRAM()." GB, HDD = ".$this->getHDD()." TB, CPU = ".$this->getCPU()." GHz";
	}
}
?>