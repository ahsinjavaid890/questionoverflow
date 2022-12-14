@extends('layouts.admin-app')
@section('title','New Category')
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
                        <li class="breadcrumb-item"><a href="{{url('categories')}}">Templates</a></li>
                        <li class="breadcrumb-item active">Add Template</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Template</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    @include('admin.alert')
    <form enctype="multipart/form-data" method="POST" action="{{ url('admin/templates/createtemplate') }}" class="needs-validation" novalidate>
        {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Template Details
                </div>
                <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Select Category</label>
                            <select name="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $r)
                                <option value="{{ $r->id }}">{{ $r->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Template Name</label>
                            <input onkeyup="createslug(this.value)" type="text" class="form-control" name="name" id="validationCustom01"
                                placeholder="Title" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="validationCustom02">Slug</label>
                            <input type="text" id="slug" class="form-control" name="slug" onkeyup="checkslug()" required >
                                 <small id="slugerror" class="mt-1 text-danger"></small>
                        </div> 
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Preview URL</label>
                            <input type="text" class="form-control" name="previewurl"  required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Template Image</label>
                            <input type="file" class="form-control" name="image"  required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Gallery Images</label>
                            <input type="file" class="form-control" name="galleryimages[]"  multiple>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Zip File</label>
                            <input type="file" class="form-control" name="zipfile"  required>
                        </div>
                                               
                        <div class="form-group mb-3">
                            <label for="validationCustom03">Description</label>
                            <textarea id="summernote-basic" class="form-control" name="description"></textarea>
                        </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Template Meta Tags
                </div>
                <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="validationCustom03">Meta Title</label>
                            <input type="text" class="form-control" name="metta_tittle" id="meta_title">
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom04">Meta Description</label>
                                    <textarea class="form-control" name="metta_description" id="meta_description"
                                        placeholder="Put something" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom04">Meta Keywords</label>
                                    <textarea class="form-control" name="metta_keywords" id="meta_keywords"
                                        placeholder="Put something" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                        <input type="radio" checked="" value="Active" name="status" id="active">
                        <label for="active">Published</label>
                        </div>
                        <div class="form-group mb-2">
                            <input type="radio" value="delete" name="status" id="delete">
                            <label for="delete">Not Published</label>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order">Category Order</label>
                                    <input class="form-control" id="order"  type="number"  name="order">
                                </div>
                            </div>
                        </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
            <div class="row">
                <div class="col-md-12 text-right">
                    <button id="submitbutton" type="submit" class="btn btn-primary form-control">Save</button>
                </div>
            </div>
        </div> <!-- end col-->
    </div>
</form>
    <!-- end row -->
</div> <!-- container -->
@endsection