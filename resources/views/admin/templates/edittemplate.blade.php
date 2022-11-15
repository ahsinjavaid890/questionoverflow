@extends('layouts.admin-app')
@section('title','Edit Template')
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
    <form enctype="multipart/form-data" method="POST" action="{{ url('admin/templates/updatetemplate') }}" class="needs-validation" novalidate>
        {{ csrf_field() }}
        <input type="hidden" value="{{ $data->id }}" name="id">
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
                                <option @if($data->category_id == $r->id) selected @endif value="{{ $r->id }}">{{ $r->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Category Name</label>
                            <input value="{{ $data->name }}" onkeyup="createslug(this.value)" type="text" class="form-control" name="name" id="validationCustom01"
                                placeholder="Title" required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="validationCustom02">Slug</label>
                            <input value="{{ $data->url }}" type="text" id="slug" class="form-control" name="slug" onkeyup="checkslug()" required >
                                 <small id="slugerror" class="mt-1 text-danger"></small>
                        </div> 
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Template Image</label>
                            <input type="file" class="form-control" name="image"  >
                        </div>
                        <div class="form-group mb-3">
                            <label for="validationCustom01">Zip File</label>
                            <input type="file" class="form-control" name="zipfile"  >
                        </div>
                                               
                        <div class="form-group mb-3">
                            <label for="validationCustom03">Description</label>
                            <textarea class="form-control" name="description">{{ $data->description }}</textarea>
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
                            <input value="{{ $data->meta_title }}" type="text" class="form-control" name="metta_tittle" id="meta_title">
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom04">Meta Description</label>
                                    <textarea class="form-control" name="metta_description" id="meta_description"
                                        placeholder="Put something" rows="4">{{ $data->metta_description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="validationCustom04">Meta Keywords</label>
                                    <textarea class="form-control" name="metta_keywords" id="meta_keywords"
                                        placeholder="Put something" rows="4">{{ $data->metta_keywords }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <input type="radio" @if($data->status == 'Active') checked @endif value="Active" name="status" id="active">
                            <label for="active">Published</label>
                            </div>
                            <div class="form-group mb-2">
                                <input @if($data->status == 'delete') checked @endif type="radio" value="delete" name="status" id="delete">
                                <label for="delete">Not Published</label>
                            </div>
                            <div class="row mb-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="order">Category Order</label>
                                    <input value="{{ $data->order }}" class="form-control" id="order"  type="number"  name="order">
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