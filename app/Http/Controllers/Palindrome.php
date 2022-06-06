<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Palindrome extends Controller{
    
    public function checkPalindromeNumber(){

        $palindrome_counter = 0;
        $strings = array("aaabaaa","abe","ccABBAd","XYZZYX","eaaabaaae");
        
        // Looping over each string in the array and checking if it is palindrome
        // If yes, increment the counter
        for($x = 0; $x < count($strings); $x++) {

            if ($strings[$x] == strrev($strings[$x])){
                $palindrome_counter++;
            }

        }

        echo "The number of palindromes in the pre-defined array is equal to " . $palindrome_counter;

    }
}
