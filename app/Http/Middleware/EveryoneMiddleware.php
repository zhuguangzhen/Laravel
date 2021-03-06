<?php

namespace App\Http\Middleware;

use Closure;

class EveryoneMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        define('FRONT_VERSION',10);
        
        $pathInfo = request()->path();
        preg_match('/group=(\S+)\&action=(\S+)\&method=(\S+)/', $pathInfo, $matchs);

        if(empty($matchs)){
            preg_match('/(\S+)\/(\S+)\/(\S+)/', $pathInfo, $matchs);
        }
    
        define('GROUP', strtolower($matchs[1]));
        define('ACTION', strtolower($matchs[2]));
        define('METHOD', strtolower($matchs[3]));

        return $next($request);
    }

    // private function path(){
    //     define('STORE_PIC_PATH', '/Public/Upload/Business/Store');
    //     define('TICKET_PIC_PATH', '/Public/Upload/Business/Ticket');
    // }
}
