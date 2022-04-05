@extends('layouts.homebase')

@section('title', 'Emlak')

@section('slider')

    @include("home.Carousel Star")

@endsection
@section('content')
    @include("home.Services Star")
    @include("home.Property Star")
    @include("home.Agents Star")
    @include("home.News Star")
    @include("home.News Star")
    @include("home.Testimonials Star")
@endsection

