<!--/ Nav Star /-->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">

        @php
            $mainCategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>

        </button>
        <a class="navbar-brand text-brand" href="{{route('home')}}">N<span class="color-b">Emlak</span></a>
        <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="about.html">Hakkında</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="property-grid.html">Emlak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog-grid.html">Blog</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown1" role="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            Categories
                    </a>


                        <div class="dropdown-menu " aria-labelledby="navbarDropdown2">
                            <ul>
                                @foreach($mainCategories as $rs)
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle hidden" href="/" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        {{$rs->title}}
                                    </a>
                                    <div class="dropdown">
                                    @if(count($rs->children))

                                        @include('home.categorytree',['children' => $rs->children])


                                    @endif

                                    </div>
                                </li>
                                @endforeach
                            </ul>

                        </div>
                        @foreach($mainCategories as $rs)

                    @endforeach



                    <!--/ test için sildim
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <ul >
                                @foreach($mainCategories as $rs)


                                    <a class="nav-link dropdown-toggle" href="property-single.html" id="navbarDropdown" role="button" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        {{$rs->title}}
                                    </a>

                                    <div >

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                            <a class="dropdown-item" href="property-single.html">Property Single {{$rs->title}}</a>
                                            <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                                            <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                                            <a class="dropdown-item" href="agent-single.html">Agent Single</a>
                                        </div>
                                    </div>

                                @endforeach

                            </ul>
                        </div>

                    </li>
/-->

                <!--/ test için sildim
                @foreach($mainCategories as $rs)
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle " href="/" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="property-single.html">Property Single</a>
                        <a class="dropdown-item" href="blog-single.html">Blog Single</a>
                        <a class="dropdown-item" href="agents-grid.html">Agents Grid</a>
                        <a class="dropdown-item" href="agent-single.html">Agent Single</a>
                    </div>

                </li>
                @endforeach
                /-->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">İletişim</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Hesap
                    </a>
                    <?php
                    $a= 1;
                    if ($a==0 ){
                    ?>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login">Giriş yap</a>
                        <a class="dropdown-item" href="/register">Kayıt ol</a>
                    </div>
                    <?php
                    }
                    else{
                    ?>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/dashboard">profil</a>

                    </div>
                    <?php
                    }
                    ?>
                </li>
            </ul>
        </div>
        <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
                data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
        </button>
    </div>
</nav>
<!--/ Nav End /-->
