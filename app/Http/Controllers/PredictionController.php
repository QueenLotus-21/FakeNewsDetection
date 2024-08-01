<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class PredictionController extends Controller
{
      
    function predict(Request $request)
    {
       
        $news = $request->news;
        $command = escapeshellcmd('/bin/python3 /home/lotus/Documents/FND/routes/pythonFile/newsHandler.py "'.$news.'"');
        $raw_output=[];
        exec($command,$raw_output);
        $output = $raw_output[0];
        if($output == "True"){
            //handle if true
            return "true";
        }elseif($output == "False"){
            //handle if false
            return "false";
            
        }else{
            throw new Exception("UNEXPECTED RESULT ".$output." FROM THE MODEL", 0);
            
        }
    }
}