@extends('layouts.adminbase')

@section('title', 'Add Category ')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Create </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                    </ol>
                </nav>
            </div>


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category elements</h4>
                        <p class="card-description"> Category form elements </p>

                        <form role="form" action="{{route('admin.category.store')}}"  method="post" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group" >
                                <label>Parent Category</label>

                                <select class="form-control" name="parent_id" >
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }} </option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">

                            </div><div class="form-group">
                                <label for="exampleInputName1">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                                </div>
                            </div>

                            <div class="form-group" >
                                <label>Status</label>
                                <select class="form-control" name="status" >
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


@endsection
@section('foot')
        <!-- 22222222222222222222222-->
            <script src="{{asset("assets")}}/admin/assets/js/file-upload.js"></script>
            <script src="{{asset("assets")}}/admin/assets/js/typeahead.js"></script>
            <script src="{{asset("assets")}}/admin/assets/js/select2.js"></script>
            <!-- End custom js for this page -->
            <!-- Plugin js for this page -->
            <script src="{{asset("assets")}}/admin/assets/vendors/select2/select2.min.js"></script>
            <script src="{{asset("assets")}}/admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
            <!-- End plugin js for this page -->
@endsection
