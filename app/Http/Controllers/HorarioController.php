<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HorarioController extends Controller
{
    
     public function horario_mostrar()
	{
		$horarios=DB::select("select id_horario,dia,concat(hora_inicial,'-',hora_final)as horas,hora_inicial,hora_final from horario");
		return view('/Administrador/Horario/index',compact('horarios'));
    }

	/*public function horario_editar()
    {
			return view('/Administrador/Horario/edit');
    }*/

	public function actualizar(Request $input)
	{	    
		    $id=$input['id_horario'];
            $hora_inicial=$input['hora_inicial'];
            $hora_final=$input['hora_final'];

        $query=DB::update("update horario set hora_inicial='$hora_inicial', hora_final='$hora_final' where id_horario=?",[$id]);
       return redirect()->action('HorarioController@horario_mostrar')->withInput();

	}
}
