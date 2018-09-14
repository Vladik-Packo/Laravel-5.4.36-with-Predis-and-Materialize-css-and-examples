@extends('layouts.main')

@section('head')
    <title>Home</title>
@endsection

@section('script')
    console.log($('#app').get());
@endsection

@section('body')
    <div id="app">
        <example></example>
    </div>
@endsection