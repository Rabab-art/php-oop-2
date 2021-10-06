<?php 
 require_once __DIR__ . '/Product.php';


class PremiumProduct extends Product
{
private $preium;

    public function __construct($name, $type,$gender,$price,$preium=1)
    {
      $this->preium = $preium;
      parent::__construct($name, $type,$gender,$price);
    }


}