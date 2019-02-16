<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Persona;

class RegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = DB::table('elementos')
                  ->join('grupos','grupos.id', '=', 'elementos.grupo_id')
                  ->where('grupo_id','<=',2)
                  ->select('elementos.*','grupos.id as grupo_id','grupos.nom_grupo','grupos.precio','grupos.cant_pro')
                  ->get();

        return view('templates.main', compact('libros'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\|Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->name;
        
        $this->validate($request, [
            'email' => [
                'required',
                Rule::unique('users')->ignore($usuario->email = $request->email),
            ],
        ]);
        
        $usuario->password = bcrypt($request->password);
        $usuario->save();

        $user_id = User::select('id')
        ->OrderBy('id','DESC')->pluck('id')->first();

        $persona = new Persona();
        $persona->user_id = $user_id;
        $persona->nombre = $request->name;
        $persona->apellido = $request->apellido;
        $persona->dni = $request->dni;
        $persona->direccion = $request->direccion;
        $persona->tlf_contacto = $request->tlf_contacto;
        $persona->tlf_secundario = $request->tlf_secundario;
        $persona->save();
                
        flash('Registro exitoso')->important();
        
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


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
