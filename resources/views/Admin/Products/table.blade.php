<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>All-PRODUCTS-DETAILS</title>
@extends('layouts.back.backend')
@section('content')

<div class="">
  <div class="page-title">
    <div class="title_left">
      <h3>Users <small>Some examples to get you started</small></h3>
    </div>

    <div class="title_right">
      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
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
          <h2>Default Example <small>Users</small></h2>
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
            <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
          <p class="text-muted font-13 m-b-30">
            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
          </p>
          <table id="datatable" class="table table-striped table-bordered" style="width:100%;text-align:center;">
            <thead>
              <tr>
                <th>Serial Number</th>
                <th>Products Name</th>
                <th>Category</th>
                <th>Sub-Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>


            <tbody>
              @php($sl=1)
              @foreach ($products as $products)
              <tr>
                <td>{{$sl++}}</td>
                <td>{{$products->product_name}}</td>
                <td>{{$products->cat->cat_name }}</td>
                <td>{{$products->subcat->subcat_name}}</td>
                
                <td><button type="button" class="btn btn-success">Available</button></td>
                <td>
                  <a href="{{route('admin.product.view',$products->product_id)}}"><i
                    class="fa fa-eye"></i></a>
                  
                    <a href="{{route('admin.product.edit',$products->product_id)}}"><i
                      class="fa fa-edit"></i></a>
            <a href="{{route('admin.product.del',$products->product_id)}}"><i
                    class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
              
             
             
            </tbody>
          </table>
        </div>
        </div>
    </div>
  </div>
      </div>
    </div>

   
   


        </div>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
</div>

@endsection()