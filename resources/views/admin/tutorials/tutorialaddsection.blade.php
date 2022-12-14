@extends('layouts.admin-app')
@section('title','Add Section')
@section('content-admin')
<!-- Start Content-->
<div class="container-fluid">
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin/tutorials/addsection')}}/{{$data->id}}">All Sections</a></li>
                    <li class="breadcrumb-item active">Add Section</li>
                </ol>
            </div>
            <h4 class="page-title">Add Section</h4>
        </div>
    </div>
</div>
<!-- end page title -->
@include('admin.alert')
<form enctype="multipart/form-data" method="POST" action="{{ url('admin/tutorials/addnewsectionoftutorial') }}" class="needs-validation" novalidate>
    {{ csrf_field() }}
    <input type="hidden" value="{{ $data->id }}" name="tutorial_id">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Section Details
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Heading</label>
                        <input type="text" class="form-control" name="heading">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="summernote-basic" name="description"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Order</label>
                        <input required type="number" class="form-control" name="order">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Content
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Content Heading</label>
                        <input type="text" class="form-control" name="content_heading">
                    </div>
                    <div class="form-group">
                        <label>Content File</label>
                        <input type="file" class="form-control" name="content_file">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea rows="12" class="form-control" name="content"></textarea>
                    </div>
                </div> 
                <!-- end card-body-->
            </div>
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="submitbutton" type="submit" class="btn btn-primary form-control">Save</button>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</form>
    <!-- end row -->
</div> <!-- container -->
@endsection