@extends('layouts.admin-app')
@section('title','All Tutorial Section')
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
                        <li class="breadcrumb-item"><a href="{{url('admin/tutorials/alltutorials')}}">All Tutorials</a></li>
                        <li class="breadcrumb-item active">{{ $tutorial->name }}</li>
                    </ol>
                </div>
                <h4 class="page-title">All Tutorials Sections Of {{ $tutorial->name }}</h4>
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
                <div class="card-header">
                    <a href="{{ url('admin/tutorials/createsection') }}/{{ $tutorial->id }}" class="btn btn-primary">Add Section</a>
                    <!-- The Modal -->
                    <div class="modal fade" id="myModal">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Add New Section</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form enctype="multipart/form-data" method="POST" action="{{ url('admin/tutorials/addnewsectionoftutorial') }}">
                              @csrf
                              <input type="hidden" value="{{ $tutorial->id }}" name="tutorial_id">
                          
                          <!-- Modal body -->
                          <div class="modal-body">
                                <div class="form-group">
                                    <label>Heading</label>
                                    <input type="text" class="form-control" name="heading">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="summernote-basic" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea rows="12" class="form-control" name="content"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Order</label>
                                    <input type="number" class="form-control" name="order">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                          </div>

                          <!-- Modal footer -->
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="w-30">Image / Icon</th>
                                <th>Heading</th>
                                <th>Order</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $r)
                            <tr>
                                <td class="w-30">
                                    @if($r->image)
                                    <img src="{{ url('public/images') }}/{{ $r->image }}" width="30xp" alt="table-user" class="mr-2 img thumbnail" />
                                    @else

                                    No Image

                                    @endif
                                </td>
                                <td>{{ $r->heading }}</td>                            
                                <td>{{ $r->order }}</td>
                                <td>{{ Cmf::create_time_ago($r->created_at) }}</td>
                                <td>{{ Cmf::create_time_ago($r->updated_at) }}</td>
                                <td class="table-action text-center">
                                    <a href="{{url('admin/tutorials/editsection')}}/{{ $r->id }}" class="action-icon" title="Edit Tutorial"> <i class="mdi mdi-pencil"></i></a>
                                    <a onclick="return confirm('Are You Sure You want to Delete This')" href="{{url('admin/tutorials/deletesection')}}/{{ $r->id }}" class="action-icon" title="Edit Tutorial"> <i class="mdi mdi-delete"></i></a>
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