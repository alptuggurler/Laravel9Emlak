@extends('layouts.homebase')

@section('title','User Panel')


@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection

@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">User Page</h1>
                        <span class="color-text-a"></span>
                    </div>
                </div>

                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                User Page
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section">
                    <div class="row">
                        <div class="col-md-2">

                            @include('home.user.usermenu')
                        </div>

                        <div class="col-md-10">
                            <div class="title-box-d">
                                <h6 class="title-d">User Profil</h6>
                            </div>

                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">House elements</h4>
                                        <p class="card-description"> House form elements </p>

                                        <form role="form" action="{{route('userpanel.housesStore')}}"  method="post" enctype="multipart/form-data" >
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




                                            <!-- sehir -->
                                            <div class="form-group">
                                                <label for="exampleInputName1" >sehir</label>
                                                <select class="form-control" name="sehir">
                                                    <option value="0">------</option>
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
                                                <input type="text" class="form-control" name="ilce" placeholder="İlce">
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
