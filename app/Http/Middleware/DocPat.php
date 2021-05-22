<?php

namespace App\Http\Middleware;

use App\Models\Hospital;
use Closure;
use Illuminate\Http\Request;

class DocPat
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
        $anyHospital = Hospital::first();

        if ($anyHospital) {
            return $next($request);
        }

        return redirect()->route('hospital.index'); // Si no existe un hospital no se puede acceder al apartado de los pacientes y de los doctores 
    }
}
