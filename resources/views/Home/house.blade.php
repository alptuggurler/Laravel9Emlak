@extends('layouts.homebase')

@section('title', $data->title)

@section('head')

    <!-- Font Awesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>


    <style>
        .card-box-ico {
            padding: 1rem 3rem 1rem 2.5rem;
            border: hidden;
        }
        .rating {
            display: inline-block;
            position: relative;
            height: 50px;
            line-height: 50px;
            font-size: 50px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon {
            float: left;
            color: transparent;
        }

        .rating label:last-child .icon {
            color: #000;
        }

        .rating:not(:hover) label input:checked ~ .icon,
        .rating:hover label:hover input ~ .icon {
            color: #09f;
        }

        .rating label input:focus:not(:checked) ~ .icon:last-child {
            color: #000;
            text-shadow: 0 0 5px #09f;
        }

        body {font-family: Arial;}

        /* Style the tab */
        .tab {
            overflow: hidden;


            background-color: #FFFFFF;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: none;
            border-top: none;
        }
    </style>
@endsection
@section('slider')


@endsection
@section('content')
    <!--/ Intro Single star /-->

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    @include('home.messages')
                    <div class="title-single-box">
                        <h1 class="title-single"> </h1>
                        <span class="color-text-a">{{$data->sehir}} , IL 606543  ,

                            @php
                                $average = $data->comment->average('rating')
                            @endphp

                                        <span class="fa fa-star @if(($average)>=1) checked @endif"></span>
                                        <span class="fa fa-star @if(($average)>=2) checked @endif"></span>
                                        <span class="fa fa-star @if(($average)>=3) checked @endif"></span>
                                        <span class="fa fa-star @if(($average)>=4) checked @endif"></span>
                                        <span class="fa fa-star @if(($average)>=5) checked @endif"></span>
                            <a href="#">{{number_format($average,1)}}   /   {{$data->comment->count('id')}} Reviews(s)  /   Add Review</a>
                        </span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="property-grid.html">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{$data->id}} {{$data->tittle}}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->

    <section class="property-single nav-arrow-b">

        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="{{Storage::url($data->image)}}" alt="">
                        </div>
                        @foreach($images as $rs)
                            <div class="carousel-item-b">
                                <img src="{{Storage::url($rs->image)}}" width="1080" height="566" alt="">
                            </div>
                        @endforeach

                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">TL</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">{{$data->price}}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                            <h4> {{$data->ilce}}    / {{$data->sehir}} </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>{{$data->id}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Create date</strong>
                                            <span>{{ date('d-m-Y', strtotime($rs->created_at))}}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Update date</strong>
                                            <span>{{ date('d-m-Y', strtotime($rs->updated_at))}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span>Sale</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{$data->category->title}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{$data->square}}
                        <sup>2</sup>
                      </span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Number of Room:</strong>
                                            <span>{{$data->number_of_room}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Year built</strong>
                                            <span>{{$data->year_built}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Floor Location</strong>
                                            <span>{{$data->floor_location}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Number of Floors</strong>
                                            <span>{{$data->number_of_floors}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Heating:</strong>
                                            <span>{{$data->heating}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>{{$data->bathrooms}}</span>
                                        </li>

                                        <li class="d-flex justify-content-between">
                                            <strong>Dues:</strong>
                                            <span>{{$data->dues}}</span>
                                        </li>



                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>{{$data->ilce}}, {{$data->sehir}}</span>
                                        </li>


                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span>{{$data->parking}}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">


                            <div class="tab">
                                <button class="tablinks title-d " onclick="openCity(event, 'Detail')">
                                        <h4 class="title-d">Property Description</h4>
                                    </button>
                                <button class="tablinks" onclick="openCity(event, 'Reviews')"><h4 class="title-d">Reviews({{$data->comment->count('id')}})</h4></button>
                                <button class="tablinks" onclick="openCity(event, 'WriteReviews')"><h4 class="title-d">Write Reviews</h4></button>
                            </div>


                            <div id="Detail" class="tabcontent">
                            <!--
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d">
                                            <h3 class="title-d">Property Description</h3>
                                        </div>
                                    </div>
                                </div>
                                !-->
                                <div class="property-description">
                                    <p class="description color-text-a">
                                        {!! $data->detail !!}
                                    </p>

                                </div>
                            </div>




                            <div id="Reviews" class="tabcontent">

                                @foreach($reviews as $rs)
                                <div class="col-sm-12 col-md-12">
                                    <div class="testimonial-author-box">

                                        <h5 class="testimonial-author">{{$rs->user->name}}</h5>
                                        <h5 class="testimonial-author">{{$rs->created_at}}</h5>
                                        <span class="fa fa-star @if($rs->rating>=1) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rating>=2) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rating>=3) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rating>=4) checked @endif"></span>
                                        <span class="fa fa-star @if($rs->rating>=5) checked @endif"></span>
                                    </div>


                                    <div class="testimonials-content">

                                        <strong>{{$rs->subject}}</strong>

                                        <p class="testimonial-text">{{$rs->review}}</p>
                                    </div>

                                </div>
                                @endforeach
                            </div>


                            <div id="WriteReviews" class="tabcontent">
                                <h3>WriteReviews</h3>
                                <form class="form-a" action="{{route("storecomment")}}" method="post" role="form">
                                    @csrf
                                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                                    <div id="errormessage"></div>
                                    <div class="row">

                                        <input type="hidden" name="house_id"  value="{{$data->id}}">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name">
                                                <div class="validation"></div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <textarea name="review" class="form-control" name="review" cols="45" rows="8" placeholder=",Review"></textarea>
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                        <!-- https://codepen.io/neilpomerleau/pen/wzxzQM !-->
                                         <div class="form-group rating">
                                             <label>
                                                 <input type="radio" name="rating" value="1" />
                                                 <span class="icon">★</span>
                                             </label>
                                             <label>
                                                 <input type="radio" name="rating" value="2" />
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                             </label>
                                             <label>
                                                 <input type="radio" name="rating" value="3" />
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                             </label>
                                             <label>
                                                 <input type="radio" name="rating" value="4" />
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                             </label>
                                             <label>
                                                 <input type="radio" name="rating" value="5" />
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                                 <span class="icon">★</span>
                                             </label>
                                         </div>
                                        <div class="col-md-12">
                                            @auth
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                            @else
                                                <a href="/login" class="btn btn-a">For Submit Your Review , Plesse login</a>
                                            @endauth
                                        </div>
                                    </div>
                                </form>
                            </div>





                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    <li>Balcony</li>
                                    <li>Outdoor Kitchen</li>
                                    <li>Cable Tv</li>
                                    <li>Deck</li>
                                    <li>Tennis Courts</li>
                                    <li>Internet</li>
                                    <li>Parking</li>
                                    <li>Sun Room</li>
                                    <li>Concrete Flooring</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <!--/ Silinilebilir sor
                <div class="col-md-10 offset-md-1">
                    <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-video-tab" data-toggle="pill" href="#pills-video" role="tab"
                               aria-controls="pills-video" aria-selected="true">Video</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-plans-tab" data-toggle="pill" href="#pills-plans" role="tab" aria-controls="pills-plans"
                               aria-selected="false">Floor Plans</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-map-tab" data-toggle="pill" href="#pills-map" role="tab" aria-controls="pills-map"
                               aria-selected="false">Ubication</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                            <iframe src="https://player.vimeo.com/video/73221098" width="100%" height="460" frameborder="0"
                                    webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <div class="tab-pane fade" id="pills-plans" role="tabpanel" aria-labelledby="pills-plans-tab">
                            <img src="{{asset("assets")}}/img/plan2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="tab-pane fade" id="pills-map" role="tabpanel" aria-labelledby="pills-map-tab">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834"
                                    width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                Silinilebilir sor /-->


                <div class="col-md-12">
                    <div class="row section-t3">
                        <div class="col-sm-12">
                            <div class="title-box-d">
                                <h3 class="title-d">Contact Agent</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <img src="{{asset("assets")}}/img/agent-4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="property-agent">
                                <h4 class="title-agent">{{ $data->salers }}</h4>
                                <p class="color-text-a">
                                    Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                                    dui. Quisque velit nisi,
                                    pretium ut lacinia in, elementum id enim.
                                </p>
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <strong>Phone:</strong>
                                        <span class="color-text-a">(222) 4568932</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Mobile:</strong>
                                        <span class="color-text-a">777 287 378 737</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Email:</strong>
                                        <span class="color-text-a">annabella@example.com</span>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <strong>Skype:</strong>
                                        <span class="color-text-a">Annabela.ge</span>
                                    </li>
                                </ul>
                                <div class="socials-a">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="property-contact">
                                <form class="form-a">
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg form-control-a" id="inputName"
                                                       placeholder="Name *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1"
                                                       placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-1">
                                            <div class="form-group">
                        <textarea id="textMessage" class="form-control" placeholder="Comment *" name="message" cols="45"
                                  rows="8" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-a">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->

@endsection


@section('footer')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
    <script>
        $(':radio').change(function() {
            console.log('New star rate: ' + this.value);
        });
    </script>
@endsection

