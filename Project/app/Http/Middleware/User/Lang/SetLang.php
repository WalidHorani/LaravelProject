<?php

namespace App\Http\Middleware\User\Lang;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Http\Service\SetLangService ;

class SetLang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $langServiceOBJ = new SetLangService() ;
        $payloadForSetLangForAppARR = ['request'=> $request ] ;
        $langServiceOBJ->setLangForApp( $payloadForSetLangForAppARR );

        return $next($request);
    }
}

?>
