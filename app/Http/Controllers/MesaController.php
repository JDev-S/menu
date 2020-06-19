<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MesaController extends Controller
{
    public function mesa_mostrar()
	{
		$mesas=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre, mesa.mesa,usuario.nombre_usuario,usuario.correo,usuario.telefono,usuario.id_usuario,mesa.id_mesa,rol.rol from mesa inner join usuario on usuario.id_usuario=mesa.id_usuario inner join rol on rol.id_rol=usuario.id_rol");
          
		return view('/Administrador/Mesa/index',compact('mesas'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_mesa'];
		$query=DB::delete("DELETE FROM mesa WHERE id_mesa='$id'");
		return redirect()->action('MesaController@mesa_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_usuario = $input['id_usuario'];
        $mesa = $input['mesa'];
        
        $query=DB::insert('insert into mesa (id_mesa, id_usuario, mesa) values ( ?, ?, ?)', [null, $id_usuario, $mesa]);
        return redirect()->action('MesaController@mesa_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
        $id_mesa=$input['id_mesa'];
        $id_usuario = $input['id_usuario'];
        $mesa = $input['mesa'];
        
        $query=DB::update("update mesa set id_usuario='$id_usuario', mesa='$mesa' where id_mesa=?",[$id_mesa]);
        return redirect()->action('MesaController@mesa_mostrar')->withInput();
	}
}