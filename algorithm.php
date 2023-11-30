<?php

@$value = $_POST['value'] ;
$arr = explode(' ', $value);
if(count($arr) != 5)return false;
miniMaxSum($arr);
function miniMaxSum($arr)
{
    // Initialize the minimum and maximum sums
    $min_sum = PHP_INT_MAX;
    $max_sum = PHP_INT_MIN;

    // Iterate through the array and calculate the sum of the remaining four elements for each element
    for ($i = 0; $i < count($arr); $i++) {
        $sum = 0;
        for ($j = 0; $j < count($arr); $j++) {
            if ($i != $j) {
                $sum += $arr[$j];
            }
        }
        // Update the minimum and maximum sums
        $min_sum = min($min_sum, $sum);
        $max_sum = max($max_sum, $sum);
    }
   
    echo $min_sum . " " . $max_sum;
}
