<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $libros = DB::table('elementos')
        ->join('grupos','grupos.id', '=', 'elementos.grupo_id')
        ->where('grupo_id','<=',2)
        ->select('elementos.*','grupos.id as grupo_id','grupos.nom_grupo','grupos.precioDolar','grupos.cant_pro')
        ->get();

        $data = file_get_contents('https://s3.amazonaws.com/dolartoday/data.json');
        $json = json_decode($data, true);
        $dolar = $json['USD']['promedio'];
        
        $totalDigital = ($libros[0]->precioDolar)*($dolar);
        $totalFisico = ($libros[1]->precioDolar)*($dolar);
        
        return view('templates.main', compact('libros','totalDigital','totalFisico'));
    }
}
