<?php
require_once 'collatz.php';

$start = 25;
$end = 24658;

$results = Collatz::analyzeInterval($start, $end);

echo "Number with the maximum number of iterations: " . $results['maxIterations']['number'] . " (Iterations: " . $results['maxIterations']['iterations'] . ")\n";
echo "Number with the minimum number of iterations: " . $results['minIterations']['number'] . " (Iterations: " . $results['minIterations']['iterations'] . ")\n";
echo "Number with the highest reached value: " . $results['maxReached']['number'] . " (Maximum value: " . $results['maxReached']['value'] . ")\n";
