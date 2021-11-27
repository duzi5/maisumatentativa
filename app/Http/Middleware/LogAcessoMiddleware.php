<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {



        $rota = $request->getRequestUri();
        $ip =$request->server->get('REMOTE_ADDR');

        LogAcesso::create(['log'=> 'IP xyz requisitou a rota abcd']);
        LogAcesso::create(['log'=> 'O ip  $ip acessou o site pela rota: $rota']);




        return Response([$ip, $rota]);
    }

}
