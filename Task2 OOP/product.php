<?php

class Product
{
    public $name;
    public $price;
    public $discription;
    public $image;

    public function calcPrice()
    {
        return $this->price;
    } 

    public function uploadImage($image)
    {
        $this->image = $image;
    }
}

class Book extends Product
{
    public $publishers = [];
    public $writer;
    public $color;
    public $supplier;
    public $publisher;


    public function showAllPublishers()
    {
        foreach($this->publishers as $publisher)
            {
                echo $publisher . "<br>";
            }
    }

    public function choosePublisher($publisher)
    {
        if (in_array($publisher, $this->publishers))
            {
                return $publisher;
            }
        return null;    
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }


}    

class BabyCar extends product
{
    public $age;
    public $weight;
    public $materials = [];
    public $specialTax;

    public function displayMaterials()
    {
        foreach ($this->materials as $material)
            {
                echo $material . "<br>";
            }
    }

    public function getFinalPrice()
    {
        return $this->price + ($this->price * $this->specialTax / 100);
    }
}

class Gift extends Product
{

}

// Gift Object
$gift = new Gift();

$gift->name = "Birthday Gift";
$gift->price = 300;
$gift->discription = "Birthday Present";
$gift->uploadImage("images/geft.jpg");

echo $gift->name . "<br>";
echo "Price is : " . $gift->calcPrice() . "<br>";
echo "<img src='" . $gift->image . "' width='200'>";
echo "<hr>";


///////////Product Object//////////////

$product = new Product();

$product->name = "Laptop";
$product->price = 5000;
$product->discription = "Gaming Laptop";
$product->uploadImage("images/laptop.jpg");

echo $product->name . "<br>";
echo "Price is : " .$product->calcPrice() . "<br>";
echo "<img src='" . $product->image . "' width='200'>". "<br>";

echo "<hr>";

///////////Book Object//////////////

$book = new Book();
$book->name = "Spiderman Book";
$book->price = 200;
$book->publishers = ["A", "B", "C"];
$book->writer = "Hatem";
$book->color = "Blue";
$book->supplier = "Company";
$selected = $book->choosePublisher("B");
if ($selected !==null)
    {
        $book->setPublisher($selected);
    }
echo $book->publisher;
echo "<hr>";

///////////BabyCar Object//////////////
$car = new BabyCar();
$car->name = "Baby Car";
$car->price = 1000;
$car->age = 3;
$car->weight = 5;
$car->materials = ["Plastic", "Metal", "Fabric"];
$car->specialTax = 10;
$car->uploadImage("images/BabyCar.jpg");

echo $car->name . "<br>";
echo $car->calcPrice() . "<br>";
echo "<img src='" . $car->image . "' width='200'>" . "<br>";

$car->displayMaterials();
echo "Final Price: " . $car->getFinalPrice();