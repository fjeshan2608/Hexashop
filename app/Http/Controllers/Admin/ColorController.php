<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    //Index
    public function index(){
        return view('Admin.Color.index');
    }

    // Table
    public function table(){
        return view('Admin.Color.table');
    }
}
