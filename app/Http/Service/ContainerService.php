<?php

namespace App\Http\Service;

class ContainerService
{

    protected $container;
    protected $price;

    public function __construct($container , $price = 0)
    {
        $this->container = $container;
        $this->price = $price;
    }


    public function getContainer()
    {
        return[
            'name' => 'Container Service',
            'container' => $this->container,
            'price' => $this->price,
        ];
    }

    public function charge($charge)
    {
        $this->price = $charge;
    }

}
