<!-- resources/views/group/index.blade.php -->
@extends('layouts.main')

@section('title', 'Route Groups - Home')

@section('header', 'Route Groups - Home')

@section('content')
    <h2>This is the Home Page within a Route Group.</h2>
    <a href="{{ route('group.about') }}">Go to About Page</a>
@endsection