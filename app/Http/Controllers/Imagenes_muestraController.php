<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use DB;
class Imagenes_muestraController extends Controller
{
    public function imagenes_de_muestra_mostrar($id_alimento)
	{
		$imagenes=DB::select("select imagenes_de_muestra.id_imagen_muestra, alimentos.id_alimento, imagenes_de_muestra.imagen_muestra,alimentos.nombre_alimento from imagenes_de_muestra inner join alimentos on alimentos.id_alimento=imagenes_de_muestra.id_alimento where alimentos.id_alimento =$id_alimento");
        
        $json=json_encode($imagenes);
		//return response()->json($json);
        return Response::json(['data'=>$json]);
    }
    
    /*public function imagenes_de_muestra_mostrar($id_alimento)
	{
		$imagenes_de_muestra=DB::select('select id_imagen_muestra, id_alimento, imagen_muestra from imagenes_de_muestra where id_alimento = ?',[$id_alimento]);
          
		return view('/Administrador/imagenes_de_muestra/index',compact('imagenes_de_muestra_mostrar'));
    }*/

	public function eliminar(Request $input)
    {
		$id_imagen_muestra=$input['id_imagen_muestra'];
		$query=DB::update("DELETE FROM imagenes_de_muestra where id_imagen_muestra=?",[$id_imagen_muestra]);
		return redirect()->action('Imagenes_muestraController@imagenes_de_muestra_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_alimento = $input['id_alimento'];
        $imagen_muestra = $input['imagen_muestra'];
        
        $query=DB::insert('insert into imagenes_de_muestra (id_imagen_muestra, id_alimento, imagen_muestra) values ( ?, ?, ?)', [null, $id_alimento, $imagen_muestra]);
        return redirect()->action('Imagenes_muestraController@imagenes_de_muestra_mostrar')->withInput();
	}
}