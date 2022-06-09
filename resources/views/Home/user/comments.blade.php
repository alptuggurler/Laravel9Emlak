@extends('layouts.homebase')

@section('title','User Comments & Reviews')


@section('content')

    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">User Comment</h1>
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
                                <h6 class="title-d">User Comments & Reviews</h6>
                            </div>

                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th> ID </th>
                                        <th> House</th>
                                        <th> Name </th>
                                        <th> Subject </th>
                                        <th> Review </th>
                                        <th> Rate </th>


                                        <th> Status </th>

                                        <th> Delete</th>

                                    </tr>
                                    </thead>



                                    <tbody>
                                    @foreach( $comments  as $rs)
                                        <tr>
                                            <td> {{$rs->id}} </td>
                                            <td><a href="{{route('house',['id'=>$rs->house_id])}}">{{$rs->house->title}}</a></td>
                                            <td> {{$rs->user->name}} </td>
                                            <td> {{$rs->subject}} </td>
                                            <td> {{$rs->review}} </td>
                                            <td> {{$rs->rating}} </td>
                                            <td> {{$rs->status}} </td>


                                            <td><a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}", class ="btn btn-block btn-danger btn-sm"
                                                   onclick="return confirm('Deleting !! Are you sure ?')">Delete</a></td>


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

