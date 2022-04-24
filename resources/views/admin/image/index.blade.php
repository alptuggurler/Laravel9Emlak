@extends('layouts.adminwindow')

@section('title', 'House Image Galery')


@section('content')

    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$house->title}}</h4>
                        <p class="card-description"> Category form elements </p>

                        <form role="form" action="{{route('admin.image.store',['hid'=>$house->id])}}"  method="post" enctype="multipart/form-data" >
                            @csrf



                            <div class="form-group">
                                <label for="exampleInputName1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
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


                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>

                        <!-- Form bitis -->




                        <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">House Image List</h4>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>

                                    <th> Title </th>
                                    <th> Image </th>

                                    <th> Update </th>
                                    <th> Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach( $images  as $rs)
                                <tr>
                                    <td> {{$rs->id}} </td>


                                    <td> {{$rs->title}} </td>

                                    <td>
                                        @if($rs->image)
                                        <img src="{{\Illuminate\Support\Facades\Storage::url($rs->image)}}" style="height: 40px">
                                        @endif
                                    </td>

                                    <td><a href="{{route('admin.image.update',['hid'=>$house->id,'id'=>$rs->id])}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>
                                    <td><a href="{{route('admin.image.destroy',['hid'=>$house->id,'id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                        onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>



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

                    @section('foot')
                            <script src="{{asset("assets")}}/admin/assets/vendors/js/vendor.bundle.base.js"></script>

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
