@extends('frontend.layouts.app')
@section('title')
    @if (\Route::current()->getName() == 'products.cartlist')
        Shopping
    @elseif (\Route::current()->getName() == 'payment.response')
        Payment
    @else
        Products
    @endif 
@endsection
@section('meta-content')
    @if (\Route::current()->getName() == 'products') 
        Category
    @elseif (\Route::current()->getName() == 'products.list')
        list
    @elseif (\Route::current()->getName() == 'products.cart')
    @elseif (\Route::current()->getName() == 'products.cartlist')
        Cart
    @elseif (\Route::current()->getName() == 'payment.response')
        Response
    @elseif (\Route::current()->getName() == 'products.checkout')
        Checkout
    @endif   
@endsection

@section('main')
    @if (\Route::current()->getName() == 'products') 
        @include('frontend.products.landing')
        @include('frontend.products.category')
    @elseif ((\Route::current()->getName() == 'products.list'))
        @include('frontend.products.landing')
        @include('frontend.products.list')
    @elseif ((\Route::current()->getName() == 'products.cart'))
        @include('frontend.products.landing')
        @include('frontend.products.list')
    @elseif (\Route::current()->getName() == 'products.cartlist')
        @include('frontend.products.cartlist')
    @elseif (\Route::current()->getName() == 'payment.response')
        @include('frontend.products.response')
    @endif
@endsection