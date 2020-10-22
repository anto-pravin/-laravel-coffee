<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveSearch extends Controller
{
    public function index(){
        return view('coffees.liveSearch');
    }
}
