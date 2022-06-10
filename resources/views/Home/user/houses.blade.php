@extends('layouts.homebase')

@section('title','User Panel')


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
                            <div class="col-md-3">
                                <a href="{{route('userpanel.housesCreate')}}" class="btn btn-block btn-success btn-lg" >Add House</a>
                            </div>
                            <br>

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Category </th>
                                    <th> Title </th>

                                    <th> Price </th>
                                    <th> Square </th>

                                    <th> Image </th>
                                    <th> Image Galery </th>
                                    <th> Status </th>
                                    <!--/ <th> Edit </th>/-->
                                    <th> Delete</th>
                                    <th> Show </th>
                                </tr>
                                </thead>



                                <tbody>
                                @foreach( $houses  as $rs)
                                    <tr>
                                        <td> {{$rs->id}} </td>
                                        <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>

                                        <td> {{$rs->title}} </td>
                                        <td> {{$rs->price}} </td>
                                        <td> {{$rs->square}} </td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('userpanel.houseImage',['id'=>$rs->id])}}"
                                               onclick="return !window.open(this.href,'','top=50 left=100  width =1100, height=700')"> <img src="{{asset("assets")}}/admin/assets/images/RessimGalery.png" style="height: 40px"></a>
                                        </td>
                                        <td> {{$rs->status}} </td>
                                    <!--/<td><a href="{{route('userpanel.housesEdit',['id'=>$rs->id])}}", class ='btn btn-block btn-success btn-sm'>Edit</a></td>/-->
                                        <td><a href="{{route('userpanel.houseDestroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                               onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>
                                        <td><a href="{{route('house',['id'=>$rs->id])}}", class ='btn btn-block btn-info btn-sm'>Show</a></td>


                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

