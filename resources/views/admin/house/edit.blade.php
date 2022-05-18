@extends('layouts.adminbase')

@section('title', 'Edit House :'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit House : {{$data->title}} </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit House</li>
                    </ol>
                </nav>
            </div>


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">House elements</h4>
                        <p class="card-description"> House form elements </p>

                        <form role="form" action="{{route('admin.house.update',['id'=>$data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group" >
                                <label>Parent Category</label>

                                <select class="form-control" name="category_id" >
                                    <option value="0" selected="selected">Main House</option>
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}"  @if ($rs->id == $data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Title -->
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" value ="{{$data->title}}" >
                            </div>

                            <!-- Keywords -->
                            <div class="form-group">
                                <label for="exampleInputName1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value ="{{$data->keywords}}" >

                                <!-- Description -->
                            </div><div class="form-group">
                                <label for="exampleInputName1">Description</label>
                                <input type="text" class="form-control" name="description" value ="{{$data->description}}" >
                            </div>


                            <!-- Price -->
                            <div class="form-group">
                                <label for="exampleInputName1">Price</label>
                                <input type="number" class="form-control" name="price" value="{{$data->price}}">
                            </div>

                            <!-- square -->
                            <div class="form-group">
                                <label for="exampleInputName1">Square</label>
                                <input type="number" class="form-control" name="square" value="{{$data->square}}">
                            </div>

                            <!-- number of room -->
                            <div class="form-group">
                                <label>Number of Room</label>
                                <select class="form-control" name="number_of_room"  value="{{$data->number_of_room}}">
                                    <option selected>{{$data->number_of_room}}  </option>
                                    @for($i=0 ; $i<=10 ; $i++)
                                        @for($k=0; $k<=10; $k++)
                                            <option >{{$i."+".$k}}</option>
                                        @endfor
                                    @endfor
                                </select>
                            </div>


                            <!-- Floor location -->
                            <div class="form-group">
                                <label for="exampleInputName1">Floor Location</label>
                                <input type="number" class="form-control" name="floor_location" value="{{$data->floor_location}}">
                            </div>

                            <!-- number of floor -->
                            <div class="form-group">
                                <label for="exampleInputName1">Number of Floor</label>
                                <input type="number" class="form-control" name="number_of_floors" value="{{$data->number_of_floors}}">
                            </div>

                            <!-- bedrooms -->
                            <div class="form-group">
                                <label for="exampleInputName1">Bedrooms</label>
                                <input type="number" class="form-control" name="bedrooms" value="{{$data->bedrooms}}">
                            </div>

                            <!-- Bathrooms -->
                            <div class="form-group">
                                <label for="exampleInputName1">bathrooms</label>
                                <input type="number" class="form-control" name="bathrooms" value="{{$data->bathrooms}}">
                            </div>

                            <!-- Year built -->
                            <div class="form-group" >
                                <label>Year built</label>
                                <select class="form-control" name="year_built"  value="{{$data->year_built}}">
                                    <option selected>{{$data->year_built}}  </option>
                                    @for($i=2022 ; $i>=1900 ; $i--)
                                        <option >{{$i}}</option>
                                    @endfor
                                </select>
                            </div>

                            <!-- parking -->
                            <div class="form-group" >
                                <label>Parking</label>
                                <select class="form-control" name="parking" value="{{$data->parking}}">
                                    <option selected>{{$data->parking}}  </option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <!-- heating -->
                            <div class="form-group" >
                                <label>Heating</label>
                                <select class="form-control" name="heating" value="{{$data->heating}}">
                                    <option selected>{{$data->heating}}  </option>
                                    <option>Kombi</option>
                                    <option>Soba</option>
                                </select>
                            </div>


                            <!-- dues / aidat -->
                            <div class="form-group">
                                <label for="exampleInputName1">dues</label>
                                <input type="number" class="form-control" name="dues" value="{{$data->dues}}">
                            </div>


                            <!-- salers -->
                            <div class="form-group">
                                <label for="exampleInputName1">salers</label>
                                <input type="text" class="form-control" name="salers" value="{{$data->salers}}">
                            </div>


                            <!-- sehir -->
                            <div class="form-group">
                                <label for="exampleInputName1" >sehir</label>
                                <input type="text" class="form-control" name="sehir" value="{{$data->sehir}}">
                            </div>


                            <!-- Detail -->
                            <div class="form-group">
                                <label for="exampleInputName1">Detail</label>
                                <textarea  id="detail" name="detail">{{$data->detail }}</textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );

                                </script>

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
        @section('foot')
            <!-- 22222222222222222222222 -->
                <script src="{{asset("assets")}}/admin/assets/js/file-upload.js"></script>
                <script src="{{asset("assets")}}/admin/assets/js/typeahead.js"></script>
                <script src="{{asset("assets")}}/admin/assets/js/select2.js"></script>
                <!-- End custom js for this page -->
                <!-- Plugin js for this page -->
                <script src="{{asset("assets")}}/admin/assets/vendors/select2/select2.min.js"></script>
                <script src="{{asset("assets")}}/admin/assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
                <!-- End plugin js for this page -->
@endsection
