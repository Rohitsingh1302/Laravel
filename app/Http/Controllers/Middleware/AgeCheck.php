<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response 
    // handle is a method that is called when the middleware is executed. it takes two parameters, the first one is the request object and the second one is a closure that is used to pass the request to the next middleware or to the controller. we are using Request $request and Closure $next because we want to check the age of the user before allowing them to access the route. if the age is less than 18 then we will return a response saying that you are not allowed to access this route, otherwise we will pass the request
    {   
        
        if($request->age<18){
            return response( 'You are not allowed to access this route.');
        }   
        return $next($request);
    }
}
