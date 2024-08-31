@extends('layouts.main')

@section('title', 'EvenOdd')

@section('header', 'EvenOdd')

@section('content')
    <h2>Even and Odd Numbers</h2>
    <form method="POST" action="{{ route('evenodd') }}">
        @csrf
        <label for="n">Enter a number (n):</label>
        <input type="number" name="n" id="n" value="{{ $n ?? '' }}" required>
        <button type="submit">Submit</button>
    </form>

    @if (isset($evens) && isset($odds))
        <h3>First {{ $n }} Even Numbers:</h3>
        <p>{{ implode(', ', $evens) }}</p>

        <h3>First {{ $n }} Odd Numbers:</h3>
        <p>{{ implode(', ', $odds) }}</p>
    @endif
@endsection