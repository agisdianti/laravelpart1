<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){


        $data = ['name' => 'Agis Dianti'];
        return view ("home", $data);
    }
    //
}
