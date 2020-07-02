<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Detalle_ventaController extends Controller
{
    public function detalle_ventas_mostrar()
	{
		$detalle_ventas=DB::select('select detalle_venta.id_venta, detalle_venta.id_usuario, detalle_venta.id_alimento, detalle_venta.cantidad_producto, detalle_venta.total from detalle_venta where eliminado != 1');
          
		return view('/Administrador/Detalle_venta/index',compact('detalle_ventas'));
    }

	public function eliminar(Request $input)
    {
		$id_venta=$$input['id_venta'];
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        
		$query=DB::delete("update detalle_venta set eliminado='1' WHERE id_venta='$id_venta' and id_usuario='$id_usuario' and id_alimento='$id_alimento'");
		return redirect()->action('Detalle_ventaController@detalle_ventas_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_venta=$input['id_venta'];
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        $cantidad_producto = input['cantidad_producto'];
        $total = input['total'];
        $eliminado = 0;
        
        $query=DB::insert('insert into detalle_venta (id_venta, id_usuario, id_alimento, cantidad_producto, total, eliminado) values ( ?, ?, ?, ?, ?, ?)', [$id_venta, $id_usuario, $id_alimento, $cantidad_producto, $total, $eliminado]);
        return redirect()->action('Detalle_ventaController@detalle_ventas_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{
        $id_venta=$input['id_venta'];
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        $cantidad_producto = input['cantidad_producto'];
        $total = input['total'];
        $eliminado = 1;
        
        $query=DB::update("update idetalle_venta set id_venta='$id_venta', id_usuario='$id_usuario', id_alimento='$id_alimento', cantidad_producto='$cantidad_producto', total='$total', eliminado='$eliminado' where id_venta=? and id_usuario=?, and id_alimento=?",[$id_venta.$id_usuario,$id_alimento]);
        return redirect()->action('Detalle_ventaController@detalle_ventas_mostrar')->withInput();
	}
    
    
    public function insertar_carrito(Request $input)
    {
        $cantidad=$input['cantidad'];
        $id_usuario=$input['id_usuario'];
        $id_alimento=$input['id_alimento'];
        
        
        $Cantidad_carrito="";

        
        $favoritos=DB::select('select *  from carrito_compras where carrito_compras.id_usuario='.$id_usuario.' and carrito_compras.id_alimento='.$id_alimento);
        
        if(empty($favoritos))
        {
            $cantidad_carrito=$cantidad;
            $query=DB::insert('insert into carrito_compras(id_usuario, id_alimento, cantidad) values ( ?, ?, ?)', [$id_usuario, $id_alimento, $cantidad]);
        }
        else
        {
            $cantidad_anterior=$favoritos[0]->cantidad;
            $cantidad_nueva=$cantidad+$cantidad_anterior;
            
            $query=DB::update("update carrito_compras set cantidad='$cantidad_nueva' where id_usuario=? and id_alimento=?",[$id_usuario,$id_alimento]);
            $cantidad_carrito=$cantidad_nueva;
        }
        
        $json=json_encode($cantidad_carrito);
		return response()->json($json);
        
    }
}
