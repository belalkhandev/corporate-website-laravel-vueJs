@extends('layouts.base')

@section('base.content')

    @include('partials.header')

    @yield('content')

    @include('partials.footer')
@endsection