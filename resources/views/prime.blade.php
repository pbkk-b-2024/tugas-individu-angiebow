@extends('layouts.main')

@section('title', 'Prime')

@section('header', 'Prime')

@section('content')
    <h2>Prime Numbers</h2>
    <form method="POST" action="{{ route('prime') }}">
        @csrf
        <label for="n">Enter a number (n):</label>
        <input type="number" name="n" id="n" value="{{ $n ?? '' }}" required>
        <button type="submit">Submit</button>
    </form>

    @if (isset($primes))
        <h3>First {{ $n }} Prime Numbers:</h3>
        <p>{{ implode(', ', $primes) }}</p>
    @endif
@endsection