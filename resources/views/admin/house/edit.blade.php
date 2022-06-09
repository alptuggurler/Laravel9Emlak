@extends('layouts.adminbase')

@section('title', 'Edit House :'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
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
                                        @for($k=0; $k<=3; $k++)
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
                                <select class="form-control" name="sehir">
                                    <option selected>{{$data->sehir}}  </option>
                                    <option value="1">Adana</option>
                                    <option value="2">Adıyaman</option>
                                    <option value="3">Afyonkarahisar</option>
                                    <option value="4">Ağrı</option>
                                    <option value="5">Amasya</option>
                                    <option value="6">Ankara</option>
                                    <option value="7">Antalya</option>
                                    <option value="8">Artvin</option>
                                    <option value="9">Aydın</option>
                                    <option value="10">Balıkesir</option>
                                    <option value="11">Bilecik</option>
                                    <option value="12">Bingöl</option>
                                    <option value="13">Bitlis</option>
                                    <option value="14">Bolu</option>
                                    <option value="15">Burdur</option>
                                    <option value="16">Bursa</option>
                                    <option value="17">Çanakkale</option>
                                    <option value="18">Çankırı</option>
                                    <option value="19">Çorum</option>
                                    <option value="20">Denizli</option>
                                    <option value="21">Diyarbakır</option>
                                    <option value="22">Edirne</option>
                                    <option value="23">Elazığ</option>
                                    <option value="24">Erzincan</option>
                                    <option value="25">Erzurum</option>
                                    <option value="26">Eskişehir</option>
                                    <option value="27">Gaziantep</option>
                                    <option value="28">Giresun</option>
                                    <option value="29">Gümüşhane</option>
                                    <option value="30">Hakkâri</option>
                                    <option value="31">Hatay</option>
                                    <option value="32">Isparta</option>
                                    <option value="33">Mersin</option>
                                    <option value="34">İstanbul</option>
                                    <option value="35">İzmir</option>
                                    <option value="36">Kars</option>
                                    <option value="37">Kastamonu</option>
                                    <option value="38">Kayseri</option>
                                    <option value="39">Kırklareli</option>
                                    <option value="40">Kırşehir</option>
                                    <option value="41">Kocaeli</option>
                                    <option value="42">Konya</option>
                                    <option value="43">Kütahya</option>
                                    <option value="44">Malatya</option>
                                    <option value="45">Manisa</option>
                                    <option value="46">Kahramanmaraş</option>
                                    <option value="47">Mardin</option>
                                    <option value="48">Muğla</option>
                                    <option value="49">Muş</option>
                                    <option value="50">Nevşehir</option>
                                    <option value="51">Niğde</option>
                                    <option value="52">Ordu</option>
                                    <option value="53">Rize</option>
                                    <option value="54">Sakarya</option>
                                    <option value="55">Samsun</option>
                                    <option value="56">Siirt</option>
                                    <option value="57">Sinop</option>
                                    <option value="58">Sivas</option>
                                    <option value="59">Tekirdağ</option>
                                    <option value="60">Tokat</option>
                                    <option value="61">Trabzon</option>
                                    <option value="62">Tunceli</option>
                                    <option value="63">Şanlıurfa</option>
                                    <option value="64">Uşak</option>
                                    <option value="65">Van</option>
                                    <option value="66">Yozgat</option>
                                    <option value="67">Zonguldak</option>
                                    <option value="68">Aksaray</option>
                                    <option value="69">Bayburt</option>
                                    <option value="70">Karaman</option>
                                    <option value="71">Kırıkkale</option>
                                    <option value="72">Batman</option>
                                    <option value="73">Şırnak</option>
                                    <option value="74">Bartın</option>
                                    <option value="75">Ardahan</option>
                                    <option value="76">Iğdır</option>
                                    <option value="77">Yalova</option>
                                    <option value="78">Karabük</option>
                                    <option value="79">Kilis</option>
                                    <option value="80">Osmaniye</option>
                                    <option value="81">Düzce</option>
                                </select>
                            </div>

                            <!-- ilce -->
                            <div class="form-group">
                                <label for="exampleInputName1" >ilce</label>
                                <input type="text" class="form-control" name="ilce" value="{{$data->ilce}}">
                            </div>

                            <!-- Detail -->
                            <div class="form-group">
                                <label for="exampleInputName1">Detail</label>
                                <textarea  id="detail" name="detail">{{ $data->detail}}</textarea>

                                <script>
                                    $('#detail').summernote({
                                        placeholder: '',
                                        tabsize: 2,
                                        height: 1000
                                    });
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
