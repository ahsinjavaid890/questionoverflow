@extends('layouts.admin-app')
@section('title','All Tutorials Categories')
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
                        <li class="breadcrumb-item active">All Tutorials Categories</li>
                    </ol>
                </div>
                <h4 class="page-title">All Tutorials Categories</h4>
            </div>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('message') }}
        </div>
    @endif
    <!-- end page title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table id="basic-datatable" class="table">
                        <thead>
                            <tr>
                                <th class="w-30">Image / Icon</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Tutorials</th>
                                <th>Dated</th>
                                <th>Order</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td class="w-30">
                                    <img src="{{ url('public/images') }}/{{ $r->image }}" width="30xp" alt="table-user" class="mr-2 img thumbnail" />
                                </td>
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->status }}</td>
                                <td>{{ DB::table('tutorials')->where('category_id' , $r->id)->count() }}</td>
                                <td>{{ date('d M Y, h:s a ', strtotime($r->created_at)) }}</td>
                                <td>{{ $r->order }}</td>
                                <td class="table-action text-center">
                                    <a href="{{url('admin/tutorials/editcategory')}}/{{ $r->id }}" class="action-icon" title="Edit Category"> <i class="mdi mdi-pencil"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        
                    </table>

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div> <!-- container -->
@endsection