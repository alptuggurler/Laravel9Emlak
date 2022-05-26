@extends('layouts.adminbase')

@section('title', 'Edit FAQ :')
@section('head')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection


@section('content')
    <!-- partial -->

    <div class="main-panel">

        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Edit FAQ : {{$data->question}} </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit FAQ</li>
                    </ol>
                </nav>
            </div>


            <!-- Form -->
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ elements</h4>
                        <p class="card-description"> FAQ form elements </p>

                        <form role="form" action="{{route('admin.faq.update',['id'=>$data->id])}}"  method="post" enctype="multipart/form-data">
                            @csrf


                            <!-- Title -->
                            <div class="form-group">
                                <label for="exampleInputName1">Question</label>
                                <input type="text" class="form-control" name="question" value ="{{$data->question}}" >
                            </div>

                            <!-- Detail -->
                            <div class="form-group">
                                <label for="exampleInputName1">Detail</label>
                                <textarea  id="answer" name="answer">{{$data->answer}} </textarea>

                                <script>
                                    $('#answer').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 500
                                    });
                                </script>


                            </div>



                            <div class="form-group" >
                                <label>Status</label>
                                <select class="form-control" name="status" >
                                    <option selected>{{$data->status}} </option>
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
