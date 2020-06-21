<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DireccionController extends Controller
{
    public function direccion_mostrar($id_usuario)
	{
		$direcciones=DB::select("select concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo, usuario.id_usuario,direccion.id_direccion,direccion.persona_recibe,direccion.colonia,direccion.calle,direccion.numero_interior,direccion.numero_exterior,direccion.cp,direccion.referencia,direccion.calleA,direccion.calleB,direccion.telefono,direccion.eliminado from direccion inner join usuario on usuario.id_usuario=direccion.id_usuario
        where usuario.id_usuario=$id_usuario");
        
        $json=json_encode($direcciones);
		return response()->json($json);
        //return Response::json(['data'=>$json]);
    }
}
