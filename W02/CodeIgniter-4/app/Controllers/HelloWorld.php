<?php

namespace App\Controllers;

class HelloWorld extends BaseController
{
    public function index()
    {
        $data = [
            'message' => 'Hello World!'
        ];
        return view('hello_view', $data);
    }
}
