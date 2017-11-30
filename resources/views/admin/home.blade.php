@extends('layouts.admin-no')

@section('content')



@endsection

@section('js')
    <script src="{{ url('js/admin-home.js') }}"></script>
    <script src="{{ url('js/daterangepicker.js') }}"></script>
    <script src="{{ url('js/date.js') }}"></script>
    <script src="{{ url('js/moment-with-locales.min.js') }}"></script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('css/daterangepicker.css') }}">
@endsection