<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //Index
    public function index(){
        return view('Admin.Category.index');
    }

    // Table
    public function table(){
        return view('Admin.Category.table');
    }
}
