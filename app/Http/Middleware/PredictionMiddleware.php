<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PredictionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $news = $request->news;
        error_log($news);
        $command = escapeshellcmd('/bin/python3 /home/lotus/Documents/FND/routes/pythonFile/newsHandler.py "'.$news.'"');
        
        $output = shell_exec($command);
        if ($this->$output=='REAL'){
            // return [ 'message'=>'your Account Needs Admin Approval'];
            return redirect()->route('login')->with('message','real');
        }
        elseif ($this->$output=='FAKE') {
            return redirect()->route('login')->with('message','fake');
         
        }
        else{
            // return [ 'message'=>'your Account Needs Admin Approval'];
            return redirect()->route('login')->with('message',trans('global.your Account Needs Admin Approval'));
        }

        // return $next($request);
    }
}
