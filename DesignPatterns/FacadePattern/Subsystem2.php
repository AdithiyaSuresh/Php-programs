
<?php

    /**
     * The Subsystem can accept requests either from the facade or client directly.
     * To the Subsystem, the Facade is yet another client, and it's not
     * a part of the Subsystem.
     */
    class Subsystem2
    {
         /**
         * function to initialize the subsystem
         * @return string with msg initialized 
         */
        public function operation()
        {
            return "Subsystem2: subsystem2 initialized!\n";
        }

        /**
         * function to make subsystem do actions
         * @return string with msg of doing action 
         */
        public function action()
        {
            return "Subsystem2: subsystem2 performing action !\n";
        }
    }
?>