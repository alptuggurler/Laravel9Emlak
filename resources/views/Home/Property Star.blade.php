

<!--/ Property Star s/-->
<section class="section-property section-t8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                        <h2 class="title-a">Latest Properties</h2>
                    </div>
                    <div class="title-link">
                        <a href="property-grid.html">All Property
                            <span class="ion-ios-arrow-forward"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>


        <div id="property-carousel" class="owl-carousel owl-theme">

            <!--/ ilk ressim /-->
            @foreach($houselist1 as $rs)
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{Storage::url($rs->image)}}" style="height: 350px;width: 360px"  alt="" class="img-a img-fluid">
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
                                <a href="#" class="link-a">Click here to view
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
            <!--/ Geriye kalan

            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{asset("assets")}}/img/property-3.jpg" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="property-single.html">157 West
                                        <br /> Central Park</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">rent | $ 12.000</span>
                                </div>
                                <a href="property-single.html" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>340m
                        <sup>2</sup>
                      </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{asset("assets")}}/img/property-7.jpg" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="property-single.html">245 Azabu
                                        <br /> Nishi Park let</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">rent | $ 12.000</span>
                                </div>
                                <a href="property-single.html" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>340m
                        <sup>2</sup>
                      </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item-b">
                <div class="card-box-a card-shadow">
                    <div class="img-box-a">
                        <img src="{{asset("assets")}}/img/property-10.jpg" alt="" class="img-a img-fluid">
                    </div>
                    <div class="card-overlay">
                        <div class="card-overlay-a-content">
                            <div class="card-header-a">
                                <h2 class="card-title-a">
                                    <a href="property-single.html">204 Montal
                                        <br /> South Bela Two</a>
                                </h2>
                            </div>
                            <div class="card-body-a">
                                <div class="price-box d-flex">
                                    <span class="price-a">rent | $ 12.000</span>
                                </div>
                                <a href="property-single.html" class="link-a">Click here to view
                                    <span class="ion-ios-arrow-forward"></span>
                                </a>
                            </div>
                            <div class="card-footer-a">
                                <ul class="card-info d-flex justify-content-around">
                                    <li>
                                        <h4 class="card-info-title">Area</h4>
                                        <span>340m
                        <sup>2</sup>
                      </span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Beds</h4>
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Baths</h4>
                                        <span>4</span>
                                    </li>
                                    <li>
                                        <h4 class="card-info-title">Garages</h4>
                                        <span>1</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            /-->
        </div>
    </div>
</section>
<!--/ Property End /-->
