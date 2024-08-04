<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
      //Index
      public function index(){
        return view('Admin.Products.index');
    }

    // Table
    public function table(){
        return view('Admin.Products.table');
    }
}
