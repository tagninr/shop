{{--@extends('frontend.default.layouts.master')--}}

{{--@push('title')--}}
    {{--<title>404 Not Found | {{ config('bagshop.title_full') }}</title>--}}
    {{--<meta name="description" content="{{ config('bagshop.meta.description') }}"/>--}}
    {{--<meta name="keywords" content="{{ config('bagshop.meta.keywords') }}"/>--}}
{{--@endpush--}}

{{--@section('content')--}}
    {{--<main class="wrapper main-content ">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div class="page-not-found">--}}
                        {{--<h1 class="page-404-content">--}}
                            {{--This is not the web page you are looking for--}}
                        {{--</h1>--}}
                        {{--<h2 style="font-size: 18px">--}}
                            {{--Please try one of the following pages--}}
                            {{--<a href="{{ route('frontend.home') }}" class="btn btn-primary">Home page</a>--}}
                        {{--</h2>--}}
                        {{--<form class="form-search" action="{{ url('search') }}" method="get">--}}
                            {{--<input class="input-search" name="q" id="q2" placeholder="Search here" type="text">--}}
                            {{--<div class="btn-search">--}}
                                {{--<input class="btn-search1" id="search" type="submit" value="Search">--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</main>--}}
{{--@endsection--}}

{{--@section('js')--}}
    {{--<script>--}}
        {{--$(function () {--}}
            {{--const $search = $('#search');--}}
            {{--const $q = $('#q2');--}}

            {{--$search.click(function (e) {--}}
                {{--e.preventDefault();--}}
                {{--var $keyword = $q.val();--}}

                {{--if (0 === $keyword.length) {--}}
                    {{--alert('You have not entered a keyword !');--}}
                    {{--$q.focus();--}}
                {{--} else {--}}
                    {{--var keyword = window.location.origin + '/search?q=' + $keyword;--}}
                    {{--window.location.replace(keyword);--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}