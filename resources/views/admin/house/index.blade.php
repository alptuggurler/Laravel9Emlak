@extends('layouts.adminbase')

@section('title', 'House List')


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <a href="{{route('admin.house.create')}}" class="btn btn-block btn-success btn-lg" >Add House</a>


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">House</li>
                    </ol>
                </nav>
            </div>


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">House List</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Category </th>
                                    <th> Title </th>

                                    <th> Price </th>
                                    <th> Square </th>

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
                                    <td> {{$rs->price}} </td>
                                    <td> {{$rs->square}} </td>
                                    <td>
                                        @if($rs->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>
                                    <td> {{$rs->status}} </td>
                                    <td><a href="{{route('admin.house.edit',['id'=>$rs->id])}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>
                                    <td><a href="{{route('admin.house.destroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                    <td><a href="{{route('admin.house.show',['id'=>$rs->id])}}", class ='btn btn-block btn-info btn-sm'>Show</a></td>


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
