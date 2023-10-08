@extends('backend.layouts.app')
@section('title')
    Dashboard
@endsection

@section('main')
    @include('backend.restaurant.dashboard')
    <!-- @if (\Route::current()->getName() == 'restaurant.category') 
        @include('backend.restaurant.dashboard')
    @endif -->
@endsection