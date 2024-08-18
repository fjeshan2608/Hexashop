<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Str;

class SubCategoryController extends Controller
{
    //Index
    public function index(){
        $cat=Categories::all();
        return view('Admin.SubCategory.index',compact('cat'));
    }

    // Add-Details
    public function save(Request $req){
        $store=new Subcategory();
        $store->subcat_name=$req->name;
        $store->subcat_slug=Str::slug($req->name);
        $store->sub_cat=$req->cat;
        $store->save();

        if($store){
            $notification = array(
                'message' => 'Sub-Category Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }

    // Table
    public function table(){
        $sub=Subcategory::all();
        $cat=Categories::all();
        return view('Admin.SubCategory.table',compact('sub','cat'));
    }
    // Edit
    public function edit($id){
        $sub=Subcategory::find($id);
        $cat=Categories::all();
        return view('Admin.SubCategory.edit',compact('sub','cat'));
    }
    // Update
    public function update(Request $req){
        $store=Subcategory::find($req->s_id);
        $store->subcat_name=$req->name;
        $store->subcat_slug=Str::slug($req->name);
        $store->sub_cat=$req->cat;
        $store->save();

        if($store){
            $notification = array(
                'message' => 'Sub-Category Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);
    }
    // Delete
    public function del($id){
        $sub=Subcategory::find($id);
        $sub->delete();
        $notification = array(
            'message' => 'Sub-Category Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
    
}
