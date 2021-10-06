<?php 

class Product
{
    //proprietà

    protected $name;
    protected $type;
    protected $price;
    protected $gender;
    protected $discount;

    //Constructor

    public function __construct($name, $type,$gender,$price)
    {
        $this->name   =$name;
        $this->type=$type;
        $this->gender=$gender;
        $this->price=$price;
    }

    //Metodi
    public function getFullInfo()
    {
        return $this->name .' '. $this->type .' '. $this->price .
        ' '. $this->gender;
    }

    protected function setDiscount()
    {
        //sconto studenti 

        $this->discount = $this->age > 25 ? 15 : 0;
    }

    public function getDisocunt()
    {
         $this->setDiscount();
         
         return $this->discount;

    }

}