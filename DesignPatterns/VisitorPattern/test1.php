
<?php
    
    interface ItemElement
    {

        public function accept($visitor);
    }

    class Book implements ItemElement
    {

        private $price;
        private $isbnNumber;
        
        public function __construct($cost,$isbn)
        {
            $this->price = $cost;
            $this->isbnNumber = $isbn;
        }
        
        public function getPrice() 
        {
            return $this->price;
        }
    
        public function getIsbnNumber() 
        {
            return $this->isbnNumber;
        }
    
        public function accept($visitor) 
        {
            return $visitor->visit($this);
        }
    
    }

    class Fruit implements ItemElement 
    {
	
        private $pricePerKg;
        private $weight;
        private $name;
        
        public function __construct($priceKg,$wt,$nm)
        {
            $this->pricePerKg = $priceKg;
            $this->weight = $wt;
            $this->name = $nm;
        }
        
        public function getPricePerKg() 
        {
            return $this->pricePerKg;
        }
    
    
        public function getWeight() 
        {
            return $this->weight;
        }
    
        public function getName()
        {
            return $this->this.name;
        }
        
        public function accept($visitor) 
        {
            return $visitor->visit($this);
        }
    
    }

    interface ShoppingCartVisitor 
    {

        function visit($book);
        function visit($fruit);
    }

    class ShoppingCartVisitorImpl implements ShoppingCartVisitor 
    {

        public function visit($book) 
        {
           $cost=0;
            //apply 5$ discount if book price is greater than 50
            if($book->getPrice() > 50)
            {
                $cost = $book->getPrice()-5;
            }
            else 
            $cost = $book->getPrice();
            echo "Book ISBN::".$book.getIsbnNumber()." cost =".$cost;
            return $cost;
        }
    
        public function visit($fruit) 
        {
            $cost = $fruit->getPricePerKg() * $fruit->getWeight();
            echo $fruit->getName()." cost = ".$cost;
            return $cost;
        }
    
    }

            $items = [];
            $items = new ItemElement[]{new Book(20, "1234"),new Book(100, "5678"),
                    new Fruit(10, 2, "Banana"), new Fruit(5, 5, "Apple")};
            
            int total = calculatePrice(items);
            System.out.println("Total Cost = "+total);
    
        public function calculatePrice(ItemElement[] items) 
        {
            ShoppingCartVisitor visitor = new ShoppingCartVisitorImpl();
            int sum=0;
            for(ItemElement item : items)
            {
                sum = sum + item.accept(visitor);
            }
            return sum;
        }
    

?>