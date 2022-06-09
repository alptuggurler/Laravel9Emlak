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
                           @include("profile.show")
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

