<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    //Index
    public function index(){
        return view('Admin.Size.index');
    }

    // Table
    public function table(){
        return view('Admin.Size.table');
    }
}
