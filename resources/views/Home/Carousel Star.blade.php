<!--/ Carousel Star /-->
<div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">

        @foreach($sliderdata as $rs)


        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{Storage::url($rs->image)}})">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral , Florida
                                        <br> 78345
                                        <br> <a href="#" class="intro-title-top">{{$rs->id}}test</a>
                                    </p>

                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">{{$rs->id}} </span> {{$rs->category->title}}
                                            <br> {{$rs->title}}</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="{{route('house',['id'=>$rs->id])}}"><span class="price-a">Buy | {{$rs->price}}TL</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach


        <!--/ Sildik
        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset("assets")}}/img/slide-2.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345</p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Rino
                                        <br> Venda Road Five</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="carousel-item-a intro-item bg-image" style="background-image: url({{asset("assets")}}/img/slide-3.jpg)">
            <div class="overlay overlay-a"></div>
            <div class="intro-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="intro-body">
                                    <p class="intro-title-top">Doral, Florida
                                        <br> 78345</p>
                                    <h1 class="intro-title mb-4">
                                        <span class="color-b">204 </span> Alira
                                        <br> Roan Road One</h1>
                                    <p class="intro-subtitle intro-price">
                                        <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            /-->

    </div>
</div>
<!--/ Carousel end /-->
