<?php
$input = 'abcdbcf';
$substringLength = 4;

function countUniqueSubstrings($input, $substringLength) {
    $uniqueSubstrings = [];

    for ($i = 0; $i <= strlen($input) - $substringLength; $i++) {
        $substring = substr($input, $i, $substringLength);
        if (!in_array($substring, $uniqueSubstrings)) {
            $uniqueSubstrings[] = $substring;
        }
    }

    return count($uniqueSubstrings);
}

$uniqueSubstringCount = countUniqueSubstrings($input, $substringLength);
echo "Number of unique substrings of length $substringLength: $uniqueSubstringCount";
?>
