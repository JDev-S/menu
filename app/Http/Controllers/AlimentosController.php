<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AlimentosController extends Controller
{
      public function alimentos_mostrar()
	{
		$alimentos=DB::select('select alimentos.id_alimento,alimentos.nombre_alimento,alimentos.id_categoria,alimentos.descripcion,alimentos.fotografia_miniatura,alimentos.calorias,alimentos.tiempo_preparacion,alimentos.precio,categoria.nombre_categoria from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria');
          
		return view('/Administrador/Alimentos/index',compact('alimentos'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_alimento'];
		$query=DB::delete("DELETE FROM alimento WHERE id_alimento='$id'");
		return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
	}
    
    
     public function mostrar_insertar()
	{
		
          
		return view('/Administrador/Alimentos/insertar');
    }
    
    
	public function insertar(Request $input)
	{
        $nombre_alimento = $input['nombre_alimento'];
        $id_categoria = $input['nombre_alimento'];
        $descripcion = $input['nombre_alimento'];
        $fotografia_miniatura = $input['nombre_alimento'];
        $precio = $input['nombre_alimento'];
        $eliminado = 0;
        
        $query=DB::insert('insert into alimento (id_alimento, id_categoria, nombre_alimento, descripcion, fotografia_miniatura, precio, eliminado) values ( ?, ?, ?, ?, ?, ?, ?)', [null, $id_categoria, $nombre_alimento, $descripcion, $fotografia_miniatura, $precio, $eliminado]);
        return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_alimento=$input['id_alimento'];
        $id_categoria = $input['id_categoria'];
        $nombre_alimento=$input['nombre_alimento'];
        $descripcion=$input['descripcion'];
        $fotografia_miniatura=$input['fotografia_miniatura'];
        $precio=$input['precio'];
        $eliminado=$input['eliminado'];
        
        $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', fotografia_miniatura='$fotografia_miniatura', precio='$precio', eliminado='$eliminado' where id_alimento=?",[$id_alimento]);
        return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
	}
}