<!-- resources/views/parameters.blade.php -->
@extends('layouts.main')

@section('title', 'Route Parameters')

@section('header', 'Route Parameters')

@section('content')
    <h2>This is an example of Route Parameters.</h2>
    <p>Parameter ID: {{ $id }}</p>
@endsection