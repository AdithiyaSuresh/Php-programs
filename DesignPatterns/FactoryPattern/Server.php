
<?php

require_once ('Computer.php');

class Server extends Computer 
{

	private $ram;
	private $hdd;
	private $cpu;
	
    public function __construct($ram,$hdd,$cpu)
    {
		$this->ram = $ram;
		$this->hdd = $hdd;
		$this->cpu = $cpu;
	}

    public function getRAM() 
    {
		return $this->ram;
	}

    public function getHDD() 
    {
		return $this->hdd;
	}

    public function getCPU() 
    {
		return $this->cpu;
	}

}
?>