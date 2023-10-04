@extends('backend.layouts.app')
@section('title')
    Welcome
@endsection
@section('meta-content')
    To G-Helper
@endsection

@section('main')
    @include('backend.home.landing')
    @include('backend.home.news')
    @include('backend.home.about')
@endsection