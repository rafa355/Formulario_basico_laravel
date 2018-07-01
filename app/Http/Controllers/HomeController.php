<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Revista;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    protected function guardar_revista(request $data)
    {
        $revista = Revista::create([
            'nombre' => $data->nombre,
            'comprador' => $data->comprador,
            'contenido' => $data->contenido,
        ]);

        return view('welcome')->with('exito','true');  
    
    }
}
