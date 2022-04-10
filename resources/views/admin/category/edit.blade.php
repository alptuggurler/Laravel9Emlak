@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit Category : {{$data->title}} </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                    </ol>
                </nav>
            </div>


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category elements</h4>
                        <p class="card-description"> Category form elements </p>

                        <form role="form" action="{{route('admin.category.update',['id'=>$data->id])}}"  method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" value ="{{$data->title}}" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value ="{{$data->keywords}}" >

                            </div><div class="form-group">
                                <label for="exampleInputName1">Description</label>
                                <input type="text" class="form-control" name="description" value ="{{$data->description}}" >
                            </div>


                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="img[]" class="file-upload-default">
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
                                    <option selected>{{$data->status}}  </option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>


@endsection


