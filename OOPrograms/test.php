<?php
// class Animal
// {
//     public $name = "No-name animal";
    
//     public function __construct($name)
//     {
//         echo "I'm alive!\n";    
//         $this->name = $name;
//     }
      
//     public function __destruct()
//     {
//         echo "I'm dead now :(\n";
//     }
// }

// $animal = new Animal("Bob");
// echo "Name of the animal: " . $animal->name."\n";
$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);  
echo json_encode($arr);  
?>