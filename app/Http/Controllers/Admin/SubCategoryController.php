<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    //Index
    public function index(){
        return view('Admin.SubCategory.index');
    }

    // Table
    public function table(){
        return view('Admin.SubCategory.table');
    }
}
