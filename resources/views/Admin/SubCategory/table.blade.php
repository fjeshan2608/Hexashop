<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>All-SUB_CATEGORY-DETAILS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createBrandModal" style="margin-left:1400px">
    Create New Sub-Category
</button>

<!-- Modal -->
<div class="modal fade" id="createBrandModal" tabindex="-1" aria-labelledby="createBrandModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="createBrandModalLabel">Create New Category</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form class="" action="{{route('admin.sub-category.save')}}" method="post" novalidate enctype="multipart/form-data">
              @csrf
                
                <span class="section">Sub-Category Info</span>
                <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Sub-Category Name<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="ex. Women's / Men's" required="required" />
                    </div>
                </div>
                <div class="field item form-group">
                  <label class="control-label col-md-3 col-sm-3 label-align">Select Category</label>
                  <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="cat">
                      <option>Choose option</option>
                      @foreach ($cat as $cat)
                      <option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                
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
                <th>Sub-Category Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>


            <tbody>
              @php($sl=1)
              @foreach ($sub as $sub)
              <tr>
                <td>{{$sl++}}</td>
                <td>{{$sub->subcat_name}}</td>
                <td>{{$sub->cat->cat_name}}</td>
                
                <td><button type="button" class="btn btn-success">Available</button></td>
                <td>
                  
                    <a href="{{route('admin.sub-category.edit',$sub->subcat_id)}}"><i
                      class="fa fa-edit"></i></a>
            <a href="{{route('admin.sub-category.del',$sub->subcat_id)}}"><i
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection()