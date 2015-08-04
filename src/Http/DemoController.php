<?php

namespace Websanova\Demo\Http;

use App\Http\Controllers\Controller;

class DemoController extends Controller
{
    public function index()
    {
        return \Demo::hello() . ' from controller.';
    }
}