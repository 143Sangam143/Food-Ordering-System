@extends('backend.layouts.app')
@section('title')
    Services
@endsection
@section('meta-content')
    @if (\Route::current()->getName() == 'backend.services') 
        Category
    @elseif (\Route::current()->getName() == 'backend.services.list')
        list
    @elseif (\Route::current()->getName() == 'backend.services.list.details')
        details
    @endif   
@endsection

@section('main')
    
    @if(\Route::current()->getName() == 'backend.services')
        @include('backend.services.category')
    @elseif(\Route::current()->getName() == 'backend.services.category.update')
        @include('backend.services.category')
    @elseif(\Route::current()->getName() == 'backend.services.list')
        @include('backend.services.list')
    @elseif(\Route::current()->getName() == 'backend.services.list.update')
        @include('backend.services.list')
    @elseif(\Route::current()->getName() == 'backend.services.list.details')
        @include('backend.services.details')
    @endif
@endsection