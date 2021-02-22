<?php 
class Menu{
    private $name;
    private $price;
    private $count = 0;
    public function __construct($name,$price){
        $this->name = $name;
        $this->price = $price;
    }
    public function getName(){
        return $this->name;
    }
    
    public function getPrice(){
        return $this->price ;
    }

    // public function setName($hoge){
    //     $this->name = $hoge;
    // }

    // public function setPrice($hoge){
    //     $this->price = $hoge;
    // }

    public function getCount(){
        return $this->count;
    }

    public function setCount($hoge){
        $this->count = $hoge;
    }

    public function getTotal(){
       return $this->count * $this->price;
    }

    public function getTaxin(){
       return floor($this->price *1.08);
    }


} ?>