@extends('layouts.adminbase')

@section('title', 'Edit House :'.$data->title)


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">

                <div class="row mb-2">
                    <div class="col-sm-5">
                        <a href="{{route('admin.house.edit',['id'=>$data->id])}}", class ='btn btn-block btn-success btn-lg'>Edit</a>
                    </div>
                    <div class="col-sm-5">
                        <a href="{{route('admin.house.destroy',['id'=>$data->id])}}" class="btn btn-block btn-danger btn-lg"
                           onclick="return confirm('Deleting !! Are you sure ?')">Delete</a>
                    </div>


                </div>


                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show House</li>
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
                                <th style="width: 200px">Id</th>
                                <td>{{$data->id}}</td>
                            </tr>

                            <tr>
                                <th> Category</th>

                                <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>
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
                            --
                            <tr>
                                <th >Price</th>
                                <td>{{$data->price}}</td>
                            </tr>

                            <tr>
                                <th >Square</th>
                                <td>{{$data->square}}</td>
                            </tr>

                            <tr>
                                <th >Number of Room</th>
                                <td>{{$data->number_of_room}}</td>
                            </tr>

                            <tr>
                                <th >Floor Location</th>
                                <td>{{$data->floor_location}}</td>
                            </tr>

                            <tr>
                                <th >Number of Floor</th>
                                <td>{{$data->number_of_floors}}</td>
                            </tr>

                            <tr>
                                <th >Bedrooms</th>
                                <td>{{$data->bedrooms}}</td>
                            </tr>

                            <tr>
                                <th >bathrooms</th>
                                <td>{{$data->bathrooms}}</td>
                            </tr>

                            <tr>
                                <th >Year built</th>
                                <td>{{$data->year_built}}</td>
                            </tr>

                            <tr>
                                <th >parking</th>
                                <td>{{$data->parking}}</td>
                            </tr>

                            <tr>
                                <th >heating</th>
                                <td>{{$data->heating}}</td>
                            </tr>

                            <tr>
                                <th >dues</th>
                                <td>{{$data->dues}}</td>
                            </tr>

                            <tr>
                                <th >saler</th>
                                <td>@if($data->user_id != 0)
                                        {{$data->salers}}
                                    @else
                                    Admin
                                    @endif</td>
                            </tr>


                            <tr>
                                <th >sehir</th>
                                <td>{{$data->sehir}}</td>
                            </tr>

                            <tr>
                                <th >Detail</th>
                                <td>{!! $data->detail !!}</td>
                            </tr>

                            <tr>
                                <th >Image</th>
                                <td>@if($data->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}">
                                    @endif</td>
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


