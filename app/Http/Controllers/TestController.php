<?php

namespace App\Http\Controllers;

use Facades\App\Services\SimpleService;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $simpleService;

    public function __construct()
    {

//        $this->simpleService = (new SimpleService);

    }

    public function index(){
        SimpleService::doSomething();
    }
}
