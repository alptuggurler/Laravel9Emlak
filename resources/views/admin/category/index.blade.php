@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Category </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category List</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Title </th>
                                    <th> Keywords </th>
                                    <th> Description </th>
                                    <th> Image </th>
                                    <th> Status </th>
                                    <th> Edit </th>
                                    <th> Delete</th>
                                    <th> Show </th>
                                </tr>
                                </thead>



                                <tbody>
                                @foreach( $data  as $rs)
                                <tr>
                                    <td> {{$rs->id}} </td>
                                    <td> {{$rs->title}} </td>
                                    <td> {{$rs->keywords}} </td>
                                    <td> {{$rs->description}} </td>
                                    <td> {{$rs->image}} </td>
                                    <td> {{$rs->status}} </td>
                                    <td><a href="/admin/category/edit/{{$rs->id}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>
                                    <td><a href="/admin/category/delete/{{$rs->id}}", class ='btn btn-block btn-danger btn-sm'>Delete</a></td>
                                    <td><a href="/  admin/category/show/{{$rs->id}}", class ='btn btn-block btn-info btn-sm'>Show</a></td>


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- content-wrapper ends -->
@endsection
