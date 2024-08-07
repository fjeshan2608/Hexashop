<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Str;
use Image;

class ProductsController extends Controller
{
      //Index
      public function index(){
        $cat=Categories::all();
        $sub=Subcategory::all();
        return view('Admin.Products.index',compact('cat','sub'));
    }

    // Table
    public function table(){
        $products=Products::all();
        return view('Admin.Products.table',compact('products'));
    }
    public function save(Request $req)
    {
        $store=new Products();
        $store->product_name=$req->name;
        $store->product_description=$req->description;
        $store->product_slug=Str::slug($req->name);
        $store->product_cat=$req->cat;
        $store->product_subcat=$req->sub_cat;
        $store->product_color=$req->color;
        $store->product_size=$req->size;
        $store->product_stock=$req->stock;
        $store->product_price=$req->price;



        if ($req->file('image1')) {
            $image = $req->file('image1');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/product/img1/' . $image_ext);
            $store->product_image1 = $image_ext;
        }

        if ($req->file('image2')) {
            $image = $req->file('image2');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/product/img2/' . $image_ext);
            $store->product_image2 = $image_ext;
        }

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
    // View
    public function view($id){
        $product=Products::find($id);
        return view('Admin.Products.view',compact('product'));
    }
    // Edit
    public function edit($id){
        $cat=Categories::all();
        $sub=Subcategory::all();
        $product=Products::find($id);
        return view('Admin.Products.edit',compact('product','cat','sub'));
    }
    // Update
    public function update(Request $req)
    {
        $store=Products::find($req->p_id);
        $store->product_name=$req->name;
        $store->product_description=$req->description;
        $store->product_slug=Str::slug($req->name);
        $store->product_cat=$req->cat;
        $store->product_subcat=$req->sub_cat;
        $store->product_color=$req->color;
        $store->product_size=$req->size;
        $store->product_stock=$req->stock;
        $store->product_price=$req->price;



        if ($req->file('image1')) {
            $image = $req->file('image1');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/product/img1/' . $image_ext);
            $store->product_image1 = $image_ext;
        }

        if ($req->file('image2')) {
            $image = $req->file('image2');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/product/img2/' . $image_ext);
            $store->product_image2 = $image_ext;
        }

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
     // Delete
     public function del($id){
        $product=Products::find($id);
        $product->delete();
        $notification = array(
            'message' => 'Product Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }

    
}
