<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutputText extends Controller{
    
    public function outputTextField(){

        // Not completed
        $url = "https://icanhazdadjoke.com/slack";
        // open("https://icanhazdadjoke.com/slack");
        // // window.open("https://icanhazdadjoke.com/slack");
        // $content = parse_url($url);
        $content = '<script type="text/javascript">window.open("https://icanhazdadjoke.com/slack");</script>';
        $content =  json_encode($content);
        echo $content;
    }

}
