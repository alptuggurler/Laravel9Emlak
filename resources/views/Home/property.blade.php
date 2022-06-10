@extends('layouts.homebase')

@section('title','property ')


@section('head')
    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>
@endsection

@section('content')



    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single"></h1>

                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Property
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Contact Star /-->
    <section class="property-grid grid">
        <div class="container">
            <div class="row">

                @foreach($houselist as $rs)
                <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                        <div class="img-box-a">
                            <img src="{{Storage::url($rs->image)}}" style="height: 350px;width: 360px"alt="" class="img-a img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <div class="card-header-a">
                                    <h2 class="card-title-a">
                                        <a href="{{route('house',['id'=>$rs->id])}}">{{$rs->id}}-{{$rs->category->title}}
                                            <br /> {{$rs->title}}</a>
                                    </h2>
                                </div>
                                <div class="card-body-a">
                                    <div class="price-box d-flex">
                                        <span class="price-a">Buy | {{$rs->price}}TL</span>
                                    </div>
                                    @php
                                        $average = $rs->comment->average('rating')
                                    @endphp

                                    <span class="fa fa-star @if(($average)>=1) checked @endif"></span>
                                    <span class="fa fa-star @if(($average)>=2) checked @endif"></span>
                                    <span class="fa fa-star @if(($average)>=3) checked @endif"></span>
                                    <span class="fa fa-star @if(($average)>=4) checked @endif"></span>
                                    <span class="fa fa-star @if(($average)>=5) checked @endif"></span>
                                    <span class="link-a">({{$rs->comment->count('id')}})</span>
                                    <br>
                                    <a href="{{route('house',['id'=>$rs->id])}}" class="link-a">Click here to view
                                        <span class="ion-ios-arrow-forward"></span>
                                    </a>
                                </div>
                                <div class="card-footer-a">
                                    <ul class="card-info d-flex justify-content-around">
                                        <li>
                                            <h4 class="card-info-title">Area</h4>
                                            <span>{{$rs->square}}m
                        <sup>2</sup>
                      </span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Beds</h4>
                                            <span>{{$rs->bedrooms}}</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Baths</h4>
                                            <span>{{$rs->bathrooms}}</span>
                                        </li>
                                        <li>
                                            <h4 class="card-info-title">Garages</h4>
                                            <span>{{$rs->parking}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <nav class="pagination-a">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <span class="ion-ios-arrow-back"></span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item next">
                                <a class="page-link" href="#">
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

@endsection

