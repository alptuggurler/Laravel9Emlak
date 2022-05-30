@extends('layouts.homebase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('slider')

    @include("home.Carousel Star")

@endsection
@section('content')

    @include("home.Property Star")
    @include("home.Agents Star")
    @include("home.News Star")
    @include("home.Testimonials Star")
@endsection

