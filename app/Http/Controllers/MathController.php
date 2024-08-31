<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function showEvenOdd() {
        return view('evenodd');
    }

    public function calculateEvenOdd(Request $request) {
        $n = $request->input('n');
        $evens = [];
        $odds = [];
        
        for ($i = 0; count($evens) < $n; $i++) {
            if ($i % 2 == 0) {
                $evens[] = $i;
            }
        }

        for ($i = 1; count($odds) < $n; $i++) {
            if ($i % 2 != 0) {
                $odds[] = $i;
            }
        }

        return view('evenodd', ['evens' => $evens, 'odds' => $odds, 'n' => $n]);
    }

    public function showFibonacci() {
        return view('fibonacci');
    }

    public function calculateFibonacci(Request $request) {
        $n = $request->input('n');
        $fibonacci = [0, 1];
        
        for ($i = 2; $i < $n; $i++) {
            $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return view('fibonacci', ['fibonacci' => array_slice($fibonacci, 0, $n), 'n' => $n]);
    }

    public function showPrime() {
        return view('prime');
    }

    public function calculatePrime(Request $request) {
        $n = $request->input('n');
        $primes = [];
        $num = 2;

        while (count($primes) < $n) {
            $isPrime = true;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                $primes[] = $num;
            }
            $num++;
        }

        return view('prime', ['primes' => $primes, 'n' => $n]);
    }
}