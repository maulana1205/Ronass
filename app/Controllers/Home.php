<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('hello/world',['data'=>'Hello World Juga']);
    }
}
