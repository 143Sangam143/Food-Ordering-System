@extends('backend.layouts.app')
@section('title')
    @if(\Route::current()->getName() == 'backend.restaurants')
        Restaurant
    @else
        Products
    @endif
@endsection
@section('meta-content')
    @if(\Route::current()->getName() == 'backend.restaurants.update')
        update
    @elseif (\Route::current()->getName() == 'backend.products') 
        Category
    @elseif (\Route::current()->getName() == 'backend.products.list')
        list
    @elseif (\Route::current()->getName() == 'backend.products.list.details')
        details
    @endif   
@endsection

@section('main')
    @if(\Route::current()->getName() == 'backend.restaurants')
        @include('backend.products.restaurant')
    @elseif(\Route::current()->getName() == 'backend.restaurants.update')
        @include('backend.products.restaurant')
    @elseif(\Route::current()->getName() == 'backend.products')
        @include('backend.products.category')
    @elseif(\Route::current()->getName() == 'backend.products.category.update')
        @include('backend.products.category')
    @elseif(\Route::current()->getName() == 'backend.products.list')
        @include('backend.products.list')
    @elseif(\Route::current()->getName() == 'backend.products.list.update')
        @include('backend.products.list')
    @elseif(\Route::current()->getName() == 'backend.products.list.details')
        @include('backend.products.details')
    @endif
@endsection