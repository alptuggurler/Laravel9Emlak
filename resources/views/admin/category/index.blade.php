@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-success btn-lg" >Add Category</a>


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
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
                                    <th> Parent </th>
                                    <th> Title </th>
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
                                    <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>

                                    <td> {{$rs->title}} </td>

                                    <td>
                                        @if($rs->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td> {{$rs->status}} </td>
                                    <td><a href="{{route('admin.category.edit',['id'=>$rs->id])}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>
                                    <td><a href="{{route('admin.category.destroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    <td><a href="/admin/category/show/{{$rs->id}}", class ='btn btn-block btn-info btn-sm'>Show</a></td>


                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sor  </div>-->

        <!-- content-wrapper ends -->
@endsection
