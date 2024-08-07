<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Edit-PRODUCTS</title>
@extends('layouts.back.backend')
@section('content')

<div class="">
  <div class="page-title">
      <div class="title_left">
          <h3>Form Validation</h3>
      </div>

      <div class="title_right">
          <div class="col-md-5 col-sm-5 form-group pull-right top_search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                  </span>
              </div>
          </div>
      </div>
  </div>
  <div class="clearfix"></div>

  <div class="row">
      <div class="col-md-12 col-sm-12">
          <div class="x_panel">
              <div class="x_title">
                  <h2>Form validation <small>sub title</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Settings 1</a>
                              <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                  </ul>
                  <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <form class="" action="{{route('admin.product.update')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                      
                      <span class="section">Products Info</span>
                      <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Product Name<span class="required">*</span></label>
                          <div class="col-md-6 col-sm-6">
                              <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="{{$product->product_name}}" name="name" placeholder="ex. Jacket/Gen's" required="required" />
                          </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Products Description</label>
                        <div class="col-md-6 col-sm-6 ">
                          <textarea class="resizable_textarea form-control" value="" name="description" placeholder="This text area automatically resizes its height as you fill in more text courtesy of autosize-master it out..." style="height: 88px;">{{$product->product_description}}</textarea>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align">Select Category</label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="cat">
                            <option>{{$product->cat->cat_name}}</option>
                            @foreach ($cat as $cat)
                            <option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="control-label col-md-3 col-sm-3 label-align">Select Sub-Category</label>
                        <div class="col-md-6 col-sm-6 ">
                          <select class="form-control" name="sub_cat">
                            <option>{{$product->subcat->subcat_name}}</option>
                            @foreach ($sub as $sub)
                            <option value="{{$sub->subcat_id}}">{{$sub->subcat_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3  label-align">Product's Color<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="{{$product->product_color}}" name="color" placeholder="ex.  Black..." required="required" />
                        </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Product's Size<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                          <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="{{$product->product_size}}" name="size" placeholder="ex. XL" required="required" />
                      </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Product's Price<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="{{$product->product_price}}" name="price" placeholder="ex. BDT 200" required="required" />
                    </div>
                </div>
                   
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align" for="basic-icon-default-company">Image 1</label>
                  <div class="col-sm-12">
                      
                    <div class="col-md-6 col-sm-6">
                      <img id="studentPhoto" src="{{asset('storage/back/media/product/img1/'.$product->product_image1)}}">
                      <input class="form-control" type="file" name="image1" id="formFile"  onchange="studentphoto(this);" id="photo" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align" for="basic-icon-default-company">Image 2</label>
                  <div class="col-sm-12">
                      
                    <div class="col-md-6 col-sm-6">
                      <img id="studentPhoto2" src="{{asset('storage/back/media/product/img2/'.$product->product_image2)}}">
                      <input class="form-control" type="file" name="image2" id="formFile"  onchange="studentphoto2(this);" id="photo" accept="image/*">
                    </div>
                  </div>
                </div>
                     <input type="hidden" name="p_id" value="{{$product->product_id}}">
                      
                     <br>
                          <div class="form-group">
                              <div class="col-md-6 offset-md-3">
                                  <button type='submit' class="btn btn-primary">Submit</button>
                                  <button type='reset' class="btn btn-success">Reset</button>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>



<script>
  function studentphoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#studentPhoto')
                .attr('src', e.target.result)
                .attr("class","img-thumbnail mb-2")
            };
            reader.readAsDataURL(input.files[0]);
        }
      }

      function studentphoto2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#studentPhoto2')
                .attr('src', e.target.result)
                .attr("class","img-thumbnail mb-2")
            };
            reader.readAsDataURL(input.files[0]);
        }
      }
    
    </script>
@endsection()