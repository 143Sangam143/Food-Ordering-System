@extends('frontend.layouts.app')
@section('title')
    Services
@endsection
@section('meta-content')
    @if (\Route::current()->getName() == 'services') 
        Category
    @elseif (\Route::current()->getName() == 'services.list')
        list
    @elseif (\Route::current()->getName() == 'services.list.details')
        details
    @endif   
@endsection

@section('main')
    
    @if(\Route::current()->getName() == 'services')
        @include('frontend.services.landing')
        @include('frontend.services.category')
    @elseif(\Route::current()->getName() == 'services.list')
        @include('frontend.services.landing')
        @include('frontend.services.list')
    @elseif(\Route::current()->getName() == 'services.list.details')
        @include('frontend.services.details')
    @endif
@endsection