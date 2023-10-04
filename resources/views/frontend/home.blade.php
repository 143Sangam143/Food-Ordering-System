@extends('frontend.layouts.app')
@section('title')
    Welcome
@endsection
@section('meta-content')
    To G-Helper
@endsection

@section('main')
    @include('frontend.home.landing')
    @include('frontend.home.news')
    @include('frontend.home.about')
@endsection