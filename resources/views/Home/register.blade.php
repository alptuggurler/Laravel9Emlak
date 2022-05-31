 @extends('layouts.homebase')

@section('title','Register page|')


@section('content')

    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">User register</h1>

                    </div>
                </div>


                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                User Register
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @include('auth.register')
                </div>
            </div>
        </div>
    </section>
@endsection

