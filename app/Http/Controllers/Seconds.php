<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Seconds extends Controller{

    public function secondsNumber(){

        // Number of seconds from January 1 1970 till the current moment
        $seconds_since_1970 = strtotime("now");

        // Number of seconds from 14 April 1732 till January 1 1970
        $seconds_from_1732_till_1970 = strtotime("14 April 1732");

        // Total number of seconds from 14 April 1732 till current moment
        $required_number_of_seconds = $seconds_since_1970 - $seconds_from_1732_till_1970;
        echo "The number of seconds since 14 April 1732 is equal to " . $required_number_of_seconds;
        
    }

}
