<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Str;
use Image;


class CategoryController extends Controller
{
    //Index
    public function index(){
        return view('Admin.Category.index');
    }

    // Table
    public function table(){
        $cat=Categories::all();
        return view('Admin.Category.table',compact('cat'));
    }
    // Save
    public function save(Request $req){
        $store=new Categories();
        $store->cat_name=$req->name;
        $store->cat_title=$req->title;
        $store->cat_description	=$req->description;
        $store->cat_slug=Str::slug($req->name);

        if ($req->file('main_thumbnail')) {
            $image = $req->file('main_thumbnail');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/cat/img1/' . $image_ext);
            $store->cat_image1 = $image_ext;
        }


        $store->save();

        if($store){
            $notification = array(
                'message' => 'Category Added Successfully',
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
    // Edit
    public function edit($id){
        $cat=Categories::find($id);
        return view('Admin.Category.edit',compact('cat'));
    }
    // Update
    public function update(Request $req){
        $store=Categories::find($req->c_id);
        $store->cat_name=$req->name;
        $store->cat_title=$req->title;
        $store->cat_description	=$req->description;
        $store->cat_slug=Str::slug($req->name);

        if ($req->file('main_thumbnail')) {
            $image = $req->file('main_thumbnail');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/cat/img1/' . $image_ext);
            $store->cat_image1 = $image_ext;
        }


        $store->save();

        if($store){
            $notification = array(
                'message' => 'Category Added Successfully',
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
        $cat=Categories::find($id);
        $cat->delete();
        $notification = array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
