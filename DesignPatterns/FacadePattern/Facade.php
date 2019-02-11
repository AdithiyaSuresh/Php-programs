
<?php

    /**
     * The Facade class provides a simple interface to the complex logic of one or
     * several subsystems. The Facade delegates the client requests to the
     * appropriate objects within the subsystem.
     */
    class Facade
    {
        //member variables
        protected $subsystem1;
        protected $subsystem2;

        /**
         * initializing facade member variables with subsytem objects
         * @param subsystem1 object of first subsystem
         * @param subsystem2 object of second subsystem
         */
        public function __construct($subsystem1,$subsystem2)
        {
            $this->subsystem1 = $subsystem1;
            $this->subsystem2 = $subsystem2;
        } 
        
        /**
         * The Facade function operation() as shortcuts to the sophisticated 
         * functionality of the subsystems.
         * @return result opretaions of all subsystems
         */
        public function operation($type)
        {
            $result = "\nFacade initializes subsystem:\n";
            //calling operation function of subsytems
            if($type == 1)
            {
                $result .= $this->subsystem1->operation();
            }
            else if($type = 2)
            {
                $result .= $this->subsystem2->operation();
            }
            $result .= "\nFacade orders subsystems to perform the action:\n";
            //calling action function of subsytems
            if($type == 1)
            {
                $result .= $this->subsystem1->action();
            }
            else if($type = 2)
            {
                $result .= $this->subsystem2->action();
            }
            return $result;
        }
}
?>