
<?php

//require computer to work
require_once ('Computer.php');

/**
 * class Server implementing the Computer 
 */
class Server extends Computer 
{

		//private member variables of Server class
		private $ram;
		private $hdd;
		private $cpu;
	
		/**
     * parameterised constructor to set the member variable values
		 * @param ram ram value should be passed
     * @param hdd hdd value should be passed
     * @param cpu cpu value should be passed
     */
    public function __construct($ram,$hdd,$cpu)
    {
			$this->ram = $ram;
			$this->hdd = $hdd;
			$this->cpu = $cpu;
		}

		/**
     * overridden method of parent class ie computer
		 * @return ram value
     */
    public function getRAM() 
    {
			return $this->ram;
		}

	 	/**
     * overridden method of parent class ie computer
		 * @return hdd value
     */
    public function getHDD() 
    {
			return $this->hdd;
		}

	 	/**
     * overridden method of parent class ie computer
		 * @return cpu value
     */
    public function getCPU() 
    {
			return $this->cpu;
		}
}
?>