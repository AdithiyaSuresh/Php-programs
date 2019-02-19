
<?php
/********************************************************************************************
* Purpose  : Implementation of IoC on Dependency Injection to avoid replicate object creation
* File Name: InversionOfControl.php
* Author   : Adithiya Suresh
* Version  : 1.0
* Since    : 06/02/2019
********************************************************************************************/
 
    /**
     * Dependency injector
     * container is DI
     * items(items inside the container)
     */
    class DependencyInjector
    {
        protected $services = [];
        
        public function __construct() {}
        
        /**
         * to get the service
         */
        public function getService($service_Name) 
        {
            //check if the service exists
            if(!(array_key_exists($service_Name,$this->services)))
            {
                throw new Exception("The service name doesnot exits\n");
            }
            //returhn the existing service
            return $this->services[$service_Name]();
        }

        /**
         * register a new service
         */
        public function setService($service_Name,callable $callable) 
        {
            //check if the service exists
            if(array_key_exists($service_Name,$this->services))
            {
                throw new Exception("The service already exits\n");
            }
            $this->services[$service_Name] = $callable;
        }
    }

        $config = [
            'aws'=>['key'=>'123','private_Key'=>'abc'],
            'db'=>['user'=>'jass','password'=>'xyz']
        ];
        
        //This would be defined all in like a Services.php file
        $di = new DependencyInjector();
         
        $di->setService('aws',function() use ($config) {
            $obj = new stdClass();
            $obj->name = 'aws';
            $obj->key = $config['aws']['key'];
            $obj->private_Key = $config['aws']['private_Key'];
            return $obj;
        });
        
        $di->setService('database',function() use ($config) {
            $obj = new \stdClass();
            $obj->name = 'database';
            $obj->user = $config['db']['user'];
            $obj->password = $config['db']['password'];
            return $obj;
        });
        
        //This would be called where ypu need it
        $db = $di->getService('database');
        $aws = $di->getService('aws');
    
    print_r($aws)."\n";
    print_r($db)."\n";
?>