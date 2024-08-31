@extends('layouts.main')

@section('title', 'Fibonacci')

@section('header', 'Fibonacci')

@section('content')
    <h2>Fibonacci Sequence</h2>
    <form method="POST" action="{{ route('fibonacci') }}">
        @csrf
        <label for="n">Enter a number (n):</label>
        <input type="number" name="n" id="n" value="{{ $n ?? '' }}" required>
        <button type="submit">Submit</button>
    </form>

    @if (isset($fibonacci))
        <h3>First {{ $n }} Fibonacci Numbers:</h3>
        <p>{{ implode(', ', $fibonacci) }}</p>
    @endif
@endsection