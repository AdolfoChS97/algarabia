<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ContactosController extends Controller
{
    public function sendMessage(Request $request){
    	// dd($request);

    	try{
            
            $data = ['nombre' => $request->nombre, 'correo' => $request->correo,
        			 'asunto' => $request->asunto, 'comentario' => $request->comentario];

            \Mail::send('emails.templates.contacto', $data, function($messages) use ($data){
                $messages->to('algarabiaproduccionesvzla@gmail.com')->subject('Solicitud de contacto:'.$data['asunto']);
                flash('Su correo ha sido exitosamente enviado. Gracias por comunicarse con nosotros.')->important();
            });

            \Mail::send('emails.templates.contactado', $data, function($messages) use ($data){
                $messages->to($data['correo'])->subject('Contacto Algarabía Producciones');
            });
        }
        catch(Exception $e){}

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
