@extends('layouts.adminbase')

@section('title', 'Add House ')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Create </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add House</li>
                    </ol>
                </nav>
            </div>


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">House elements</h4>
                        <p class="card-description"> House form elements </p>

                        <form role="form" action="{{route('admin.house.store')}}"  method="post" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group" >
                                <label>Parent Category</label>

                                <select class="form-control" name="category_id" >
                                    @foreach($data as $rs)
                                        <option value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Title -->
                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>

                            <!-- Keywords -->
                            <div class="form-group">
                                <label for="exampleInputName1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>

                            <!-- Description -->
                            <div class="form-group">
                                <label for="exampleInputName1">Description</label>

                                <input type="text" class="form-control" name="description" placeholder="Description">
                            </div>



                            <!-- Price -->
                            <div class="form-group">
                                <label for="exampleInputName1">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="Price">
                            </div>

                            <!-- square -->
                            <div class="form-group">
                                <label for="exampleInputName1">Square</label>
                                <input type="number" class="form-control" name="square" placeholder="Square">
                            </div>

                            <!-- number of room -->
                            <div class="form-group" >
                                <label>Number of Room</label>
                                <select class="form-control" name="number_of_room" >
                                    @for($i=0 ; $i<=10 ; $i++)
                                        @for($k=0; $k<=3; $k++)
                                            <option >{{$i."+".$k}}</option>
                                        @endfor
                                    @endfor
                                </select>
                            </div>


                            <!-- Floor location -->
                            <div class="form-group">
                                <label for="exampleInputName1">Floor Location</label>
                                <input type="number" class="form-control" name="floor_location" placeholder="Floor Location">
                            </div>

                            <!-- number of floor -->
                            <div class="form-group">
                                <label for="exampleInputName1">Number of Floor</label>
                                <input type="number" class="form-control" name="number_of_floors" placeholder="Number of floor">
                            </div>

                            <!-- bedrooms -->
                            <div class="form-group">
                                <label for="exampleInputName1">Bedrooms</label>
                                <input type="number" class="form-control" name="bedrooms" placeholder="Bedrooms">
                            </div>

                            <!-- Bathrooms -->
                            <div class="form-group">
                                <label for="exampleInputName1">bathrooms</label>
                                <input type="number" class="form-control" name="bathrooms" placeholder="Bathrooms">
                            </div>

                            <!-- Year built -->
                            <div class="form-group" >
                                <label>Year built</label>
                                <select class="form-control" name="year_built" >
                                    @for($i=2022 ; $i>=1950 ; $i--)
                                        <option >{{$i}}</option>
                                    @endfor
                                </select>
                            </div>


                            <!-- parking -->
                            <div class="form-group" >
                                <label>Parking</label>
                                <select class="form-control" name="parking" >
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <!-- heating -->
                            <div class="form-group" >
                                <label>Heating</label>
                                <select class="form-control" name="heating" >
                                    <option>Kombi</option>
                                    <option>Soba</option>
                                </select>
                            </div>


                            <!-- dues / aidat -->
                            <div class="form-group">
                                <label for="exampleInputName1">dues</label>
                                <input type="number" class="form-control" name="dues" placeholder="Dues">
                            </div>


                            <!-- salers -->
                            <div class="form-group">
                                <label for="exampleInputName1" >salers</label>
                                <input type="text" class="form-control" name="salers" placeholder="Salers">
                            </div>

                            <!-- sehir -->
                            <div class="form-group">
                                <label for="exampleInputName1" >sehir</label>
                                <input type="text" class="form-control" name="sehir" placeholder="Sehir">
                            </div>

                            <!-- seçmeli box -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"> Default <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" checked=""> Checked <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" disabled=""> Disabled <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" disabled="" checked=""> Disabled checked <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value=""> Default <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked=""> Selected <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios2" id="optionsRadios3" value="option3" disabled=""> Disabled <i class="input-helper"></i></label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadio2" id="optionsRadios4" value="option4" disabled="" checked=""> Selected and disabled <i class="input-helper"></i></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Detail -->
                            <div class="form-group">
                                <label for="exampleInputName1" >Detail</label>
                                <textarea class="form-control" id="detail" name="detail">
                                </textarea>
                                <script >
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ))
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>

                            </div>



                            <!-- image -->
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

                            <!-- Status -->
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
