<?php
include 'Fibonacci/fibonacci.php';
include 'QuickSort/quicksort.php';

// use Fibonacci;

$fibonacci = new Fibonacci();
print_r($fibonacci->suite_de_fibonacci(4));