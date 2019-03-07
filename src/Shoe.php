<?php
declare (strict_types=1);

abstract class Shoe
{
    public $brands;
    public $size;
    public $cost;


    public function MenOrWomen() :int
    {

    }

    public function TypeOfShoe() :int
    {

    }
    public function shoeColor() :array
    {
        $array = [
            'one' => 'black',
            'two' => 'blue',
            'three' => 'red'
        ];

        return $array;
    }
}

