<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Page2Controller extends Controller
{
    public function index($ad)
    {
        echo $ad;
    }
}
