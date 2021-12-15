<?php
/**
 * Function which checks if we've got an anagram on our hands and reports the truth
 */

function anagram_solver($word1, $word2){
    // Get rid of the whitespace and convert to lower case.
    $cleanWord1 = strtolower(preg_replace('/[^A-Za-z]/', '', $word1));
    $cleanWord2 = strtolower(preg_replace('/[^A-Za-z]/', '', $word2));
    
    // Split the string into an array of characters.
    $arr1 = str_split($cleanWord1);
    $arr2 = str_split($cleanWord2);
    
    // Sort the arrays without maintaining indexes.
	sort($arr1);
    sort($arr2);
    
    // See if there are any differences between the arrays.
	$arrayDiff = array_diff_assoc($arr1, $arr2);
    
    // If there are no differences then the outputted array will be empty.
    $result = empty($arrayDiff);
    
    return $result;
}

//Tests
$test1 = anagram_solver('Evian', 'Naive') ? "These words are anagrams" : "These words are not anagrams";
$test2 = anagram_solver('Bicycle', 'Unicycle')? "These words are anagrams" : "These words are not anagrams";
$test3 = anagram_solver('A Decimal Point', 'Im a Dot in Place')? "These words are anagrams" : "These words are not anagrams";

echo $test1;  // Expected result "These words are anagrams". Confirmed.
echo ('<br>');
echo $test2; // Expected result "These words are not anagrams". Confirmed.
echo ('<br>');
echo $test3;  // Expected result "These words are anagrams". Confirmed.
echo ('<br>');

?>