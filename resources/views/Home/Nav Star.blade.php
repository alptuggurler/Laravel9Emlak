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
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('references')}}">References</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">House</a>
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




                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('faq')}}">FAQ</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        @auth
                        {{Auth::user()->name}}
                    </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('userpanel.index')}}">My Profile</a>
                            <a class="dropdown-item" href="/">My Houses</a>
                            <a class="dropdown-item" href="/">My Reviews</a>
                            <a class="dropdown-item" href="/logoutuser">Logout</a>

        </div>
                    @endauth
                    @guest
                        My account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/loginuser">Giriş yap</a>
                        <a class="dropdown-item" href="/registeruser">Kayıt ol</a>
                    </div>
                    @endguest

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
