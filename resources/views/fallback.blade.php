<!-- resources/views/fallback.blade.php -->
@extends('layouts.main')

@section('title', 'Fallback Route')

@section('header', 'Fallback Route')

@section('content')
    <h2>This page is displayed because the route does not exist.</h2>
    <p>You have reached the fallback route.</p>
@endsection