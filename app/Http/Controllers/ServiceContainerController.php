<?php

namespace App\Http\Controllers;

use App\Http\Other\OtherService;
use App\Http\Service\ContainerService;
use Illuminate\Http\Request;

class ServiceContainerController extends Controller
{
    public function index(OtherService $otherService,ContainerService $containerService)
    {
        $otherService->allService();
        dump($containerService->getContainer());

    }
}
