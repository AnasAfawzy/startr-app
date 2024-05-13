<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function anas()
    {
        return view('test');
    }
    public function print_name($name = '')
    {
        dd($name);
    }
}
