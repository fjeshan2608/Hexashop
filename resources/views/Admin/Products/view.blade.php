<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>VIEW-PRODUCTS-DETAILS</title>
@extends('layouts.back.backend')
@section('content')

<div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>E-commerce :: Product Page</h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5  form-group pull-right top_search">
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
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>E-commerce page design</h2>
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

            <div class="col-md-7 col-sm-7 ">
              <div class="product-image">
                <img src="{{asset('storage/back/media/product/img1/'.$product->product_image1)}}" alt="..." />
              </div>
              <br>
              <div class="product-image">
                <a>
                  <img src="{{asset('storage/back/media/product/img2/'.$product->product_image2)}}" alt="..." />
                </a>
                
              </div>
            </div>

            <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">

              <h3 class="prod_title">{{$product->product_name}}</h3>

              <p>{{$product->product_description}}</p>
              <br />

              <div class="">
                <h2>Available Colors</h2>
                <ul class="list-inline prod_color display-layout">
                  <li>
                    <p>{{$product->product_color}}</p>
                    {{-- <div class="color bg-green"></div> --}}
                  </li>


                </ul>
              </div>
              <br />

              <div class="">
                <h2>Size <small>Please select one</small></h2>
                <ul class="list-inline prod_size display-layout">
                  <li>
                    <button type="button" class="btn btn-default btn-xs">{{$product->product_size}}</button>
                  </li>

                </ul>
              </div>
              <br />

              <div class="">
                <div class="product_price">
                  <h1 class="price">Product Price : ${{$product->product_price}}</h1>
                  <br>
                </div>
              </div>

              <div class="">
                <button type="button" class="btn btn-default btn-lg">Add to Cart</button>
                <button type="button" class="btn btn-default btn-lg">Add to Wishlist</button>
              </div>

              <div class="product_social">
                <ul class="list-inline display-layout">
                  <li><a href="#"><i class="fa fa-facebook-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-twitter-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-envelope-square"></i></a>
                  </li>
                  <li><a href="#"><i class="fa fa-rss-square"></i></a>
                  </li>
                </ul>
              </div>

            </div>


          
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection