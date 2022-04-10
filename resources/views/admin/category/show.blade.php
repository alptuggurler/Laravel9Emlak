@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">

                <div class="row mb-2">
                    <div class="col-sm-5">
                        <a href="{{route('admin.category.edit',['id'=>$data->id])}}", class ='btn btn-block btn-success btn-lg'>Edit</a>
                    </div>
                    <div class="col-sm-5">
                        <a href="{{route('admin.category.destroy',['id'=>$data->id])}}" class="btn btn-block btn-danger btn-lg"
                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                    </div>


                </div>


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show Category</li>
                    </ol>
                </nav>
            </div>

            <!-- Form -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Detail</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th style="width: 150px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>
                                <th >Title</th>
                                <td>{{$data->title}}</td>
                            </tr>

                            <tr>
                                <th >Keywords</th>
                                <td>{{$data->keywords}}</td>
                            </tr>

                            <tr>
                                <th >Description</th>
                                <td>{{$data->description}}</td>
                            </tr>

                            <tr>
                                <th >Image</th>
                                <td>{{$data->image}}</td>
                            </tr>

                            <tr>
                                <th >Status</th>
                                <td>{{$data->status}}</td>
                            </tr>

                            <tr>
                                <th >Create Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>

                            <tr>
                                <th >Update_Date</th>
                                <td>{{$data->updated_at}}</td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <!-- Form finish -->


@endsection


