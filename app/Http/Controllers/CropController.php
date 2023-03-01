<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CropController extends Controller
{
    public function create(){
        return view('catgories.crop.create');
    }
}
