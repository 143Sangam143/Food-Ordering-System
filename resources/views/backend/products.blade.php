@extends('backend.layouts.app')
@section('title')
    Products
@endsection
@section('meta-content')
    @if (\Route::current()->getName() == 'backend.products') 
        Category
    @elseif (\Route::current()->getName() == 'backend.products.list')
        list
    @elseif (\Route::current()->getName() == 'backend.products.list.details')
        details
    @endif   
@endsection

@section('main')
    
    @if(\Route::current()->getName() == 'backend.products')
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