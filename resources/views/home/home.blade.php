@extends('layouts.master')

@section('title')

@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('home/home.css')}}">
@endsection

@section('js')
    <link rel="stylesheet" href="{{ asset('home/home.js')}}">
@endsection
@section('content')
    <!--slider-->
    @include('home.components.slider')
    <!--/slider-->



    <section>
        <div class="container">
            <div class="row">
                @include('components.sidebar')
                <div class="col-sm-9 padding-right">
                    <!--features_items-->
                @include('home.components.future_product')
                <!--features_items-->
                    <!--category-tab-->
                @include('home.components.category_tab')
                <!--/category-tab-->
                @include('home.components.recommend_product')
                <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

@endsection
