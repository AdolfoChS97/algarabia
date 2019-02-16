<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Compra;
use App\Persona;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // dd($request);

                $compra = new Compra();
                $compra->elemento_id = $request->elemento_id;
                $compra->persona_id = $request->persona_id;
                $compra->cant_total_productos = $request->cant_total_productos;
                $compra->totalDolares = $request->precio * $request->cant_total_productos;
                $totalBolivaresDigital = $request->precioDigital * $request->cant_total_productos;
                $totalBolivaresFisico = $request->precioFisico * $request->cant_total_productos;
                $compra->entrega = $request->entrega;
        
                $persona = DB::table('personas')
                           ->join('users','users.id', '=', 'personas.user_id')
                           ->where('personas.id',$request->persona_id)
                           ->select('personas.*','users.email')
                           ->get();
        
                $producto = DB::table('elementos')
                            ->join('grupos','grupos.id', '=', 'elementos.grupo_id')
                            ->select('elementos.*','grupos.id as grupos.grupo_id','grupos.nom_grupo')
                            ->where('elementos.id', $request->elemento_id)
                            ->get();
        
        
                $data = [
                    'nombre' => $persona[0]->nombre,
                    'apellido' => $persona[0]->apellido,
                    'dni' => $persona[0]->dni,
                    'correo' => $persona[0]->email,
                    'tlf_contacto' => $persona[0]->tlf_contacto,
                    'tlf_secundario' => $persona[0]->tlf_secundario,
                    'direccion' => $persona[0]->direccion,
                    'nom_grupo' => $producto[0]->nom_grupo,
                    'nom_elemento' => $producto[0]->nom_elemento,
                    'desc_elemento' => $producto[0]->desc_elemento,
                    'total_productos' => $compra->cant_total_productos,
                    'total_venta' => $compra->totalDolares,
                    'total_monto_bolivares_digital' => $totalBolivaresDigital,
                    'total_monto_bolivares_fisico' => $totalBolivaresFisico,
                    'entrega' => $compra->entrega,
                ];
                // dd($data);
                // $compra->save();
        
                if ($request->elemento_id == 1) {
        
                    \Mail::send('emails.templates.solicitudVirtual', $data, function($messages) use ($data){
                        $messages->to($data['correo'])->subject('Algarabía Producciones: Confirmación de solicitud de compra');
                        flash('Gracias, su solicitud de Compra se envio con exito')->important();
                    });
        
                    \Mail::send('emails.templates.solicitudCompra', $data, function($messages) use ($data){
                        $messages->to('benavidesdanielwork@gmail.com','algarabiaproduccionesvzla@gmail.com')->subject('Solicitud de compra:'.$data['nom_elemento']);
                    });
        
                } else {
        
                    \Mail::send('emails.templates.solicitudFisico', $data, function($messages) use ($data){
                        $messages->to($data['correo'])->subject('Algarabía Producciones: Confirmación de solicitud de compra');
                        flash('Gracias, su solicitud de Compra se envio con exito')->important();
                    });
        
                    \Mail::send('emails.templates.solicitudCompra', $data, function($messages) use ($data){
                        $messages->to('benavidesdanielwork@gmail.com','algarabiaproduccionesvzla@gmail.com')->subject('Solicitud de compra:'.$data['nom_elemento']);
                    });
                }
        
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
