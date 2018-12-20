<?php
function routeDispatch($request, $group, $action = 'index', $method = 'index'){
    $group = ucfirst(GROUP);
    $action = ucfirst(ACTION);
    $method = METHOD;


    $class = "App\\Http\\Controllers\\{$group}\\{$action}Controller";

    if(class_exists($class)){
        $obj = new $class();
        
        if(method_exists($obj, $method)){
            return call_user_func( array( $obj, $method), $request );
        }
    }
}

function test(){
        
    }