<?php
include 'Fibonacci/fibonacci.php';
include 'BubbleSort/bubblesort.php';

// use Fibonacci;

$fibonacci = new Fibonacci();
print_r($fibonacci->suite_de_fibonacci(4));

$bubblesort = new BubbleSort();
$arr1 = array(64, 32, 34, 26, 25, 43, 12, 68, 22, 90, 11);
$bubblesort->bubbleSort($arr1);
echo "Sorted array : \n";
print_r($arr1);