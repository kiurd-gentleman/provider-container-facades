<?php

namespace App\Http\Other;

use App\Http\Service\ContainerService;

class OtherService
{
    protected $containerService;

    public function __construct(ContainerService $containerService)
    {
        $this->containerService = $containerService;
    }

    public function allService()
    {
        $this->containerService->charge(500);
        return [
            'name' => 'Other Service',
            'price' => 500,
        ];
    }

}
