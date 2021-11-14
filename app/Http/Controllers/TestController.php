<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample() {
        // echo "<h1>Bem vindo ao TestController</h1>";
        return view("sample-view", [
            "name" => "MasterDevNet",
            "email" => "masterdev.net@gmail.com"
        ]);
    }
}
