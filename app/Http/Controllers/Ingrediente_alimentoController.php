
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Ingrediente_alimentoController extends Controller
{
    public function ingredientes_alimento_mostrar($id_alimento)
	{
		$ingredientes_alimento=DB::select('select alimentos.id_alimento, alimentos.nombre_alimento,ingredientes.id_ingrediente, ingredientes.ingrediente from ingrediente_alimento where id_alimento=?', [$id_alimento]);
          
		return view('/Administrador/Ingrediente_alimento/index',compact('ingredientes_alimento'));
    }

	public function eliminar(Request $input)
    {
		$id_alimento=$input['id_alimento'];
        $id_ingrediente=$input['id_ingrediente'];
		$query=DB::update("delete from ingrediente_alimento where id_alimento=? and id_ingrediente",[$id_alimento, $id_ingrediente]);
		return redirect()->action('Ingrediente_alimentoController@ingredientes_alimento_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_alimento = $input['id_alimento'];
        $id_ingrediente = $input['id_ingrediente'];
        
        $query=DB::insert('insert into ingrediente_alimento (id_alimento, id_ingrediente) values ( ?, ?)', [$id_alimento, $id_ingrediente]);
        return redirect()->action('Ingrediente_alimento@ingredientes_alimento')->withInput();
	}
}