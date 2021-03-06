<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Connection;
use DB;
class AlimentosController extends Controller
{
    public function alimentos_mostrar()
	{
		$alimentos=DB::select('select alimentos.id_alimento,alimentos.nombre_alimento,alimentos.id_categoria,alimentos.descripcion,alimentos.fotografia_miniatura,alimentos.calorias,alimentos.tiempo_preparacion,alimentos.precio,categoria.nombre_categoria from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.eliminado!=1');
          
		return view('/Administrador/Alimentos/index',compact('alimentos'));
    }

	public function eliminar(Request $input)
    {
		$id=$input['id_alimento'];
        $eliminado=1;
		$query=DB::update("update alimentos set  eliminado='$eliminado' where id_alimento=?",[$id]);
		return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
	}
    
    
     public function mostrar_insertar()
	{  
		return view('/Administrador/Alimentos/insertar');
    }
    
    
	public function insertar(Request $input)
	{
        $nombre_alimento = $input['nombre_alimento'];
        $id_categoria = $input['id_categoria'];
        $descripcion = $input['descripcion'];
        $precio = $input['precio'];
        $calorias=$input['calorias'];
        $tiempo_preparacion=$input['tiempo_preparacion'];
        $eliminado = 0;
        $disponible=$input['disponible'];
        
        $files = $input->file('miarchivo');
        $imagen="";
        $i=0;
        $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }

         if($input->hasFile('fotografia_miniatura'))
         {
             $file=$input->file('fotografia_miniatura');
             $name=time().'_'.$nombre_alimento;
             $file->move(public_path().'/images/',$name);
             $foto="/images/".$name;
        
             $query=DB::insert('insert into alimentos (id_alimento, id_categoria, descripcion, fotografia_miniatura, precio,  eliminado, calorias, tiempo_preparacion, nombre_alimento,disponible) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_categoria, $descripcion, $foto, $precio, $eliminado, $calorias, $tiempo_preparacion, $nombre_alimento, $dispon]);
            /*Ingresar a la tabla imagenes_muestra*/
             $id=DB::select('select id_alimento from alimentos order by id_alimento desc limit 1');
             $id_alimento=$id[0]->id_alimento;
        
        if($input->hasFile('miarchivo'))
        {
              foreach($input->file('miarchivo') as $file)
            {
                $nombre=time()+$i."_".$nombre_alimento;
                $file->move(public_path().'/images/',$nombre);
                $imagen="/images/".$nombre;
                $query2=DB::insert('insert into imagenes_de_muestra (id_imagen_muestra, id_alimento, imagen_muestra) values ( ?, ?, ?)', [null, $id_alimento, $imagen]);
                $imagen="";
                 $i++;
            }
            return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
        }
      }
	}

      public function mostrar_actualizar()
	{
        $id=$_GET['alimento'];
        $alimentos=DB::select("select * from alimentos inner join categoria on alimentos.id_categoria=categoria.id_categoria where alimentos.id_alimento=$id");
		return view('/Administrador/Alimentos/actualizar',compact('alimentos'));
    }
    
	public function actualizar(Request $input)
	{	    
        $id_alimento=$input['id_alimento'];
        $id_categoria = $input['id_categoria'];
        $nombre_alimento=$input['nombre_alimento'];
        $descripcion=$input['descripcion'];
        $precio=$input['precio'];
        $eliminado=$input['eliminado'];
        $disponible=$input['disponible'];
        $calorias=$input['calorias'];
        $tiempo_preparacion=$input['tiempo_preparacion'];
        
         $dispon="";
        if(empty($disponible))
        {
            $dispon=0;
        }
        else
        {
            $dispon=1;
        }
        
        if($input->hasFile('fotografia_miniatura'))
        {
            $file=$input->file('fotografia_miniatura');
            $name=time()."_".$nombre_alimento;
            $file->move(public_path().'/images/',$name);
            $foto="/images/".$name;
            
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', fotografia_miniatura='$foto', precio='$precio', eliminado='$eliminado' , calorias='$calorias' , tiempo_preparacion='$tiempo_preparacion', disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
        }
        else
        {
            $query=DB::update("update alimentos set id_categoria='$id_categoria', nombre_alimento='$nombre_alimento', descripcion='$descripcion', precio='$precio', eliminado='$eliminado' , calorias='$calorias' , tiempo_preparacion='$tiempo_preparacion', disponible='$dispon' where id_alimento=?",[$id_alimento]);
            return redirect()->action('AlimentosController@alimentos_mostrar')->withInput();
        }
	}
    /*PARA LA PRINCIPAL*/
    
    function principal_index($pagina=1,$categoria='',$buscar='')
    {    
        if($pagina<=0 )
        {
            $pagina=1;
        }
        $valor=($pagina*9)-9;
        
        //$categorias=DB::select('select * from categoria');
        $categorias = DB::table('categoria')->get();
        //return $products;
        
        //$informacion_alimentos=DB::select('SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion, alimentos.precio, alimentos.calorias,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 limit 6');
       
        $alimento_favoritos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion,alimentos.precio,alimentos.calorias,alimentos.fotografia_miniatura,COUNT(favoritos.id_alimento) as vendidos from favoritos RIGHT join alimentos on alimentos.id_alimento=favoritos.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 GROUP by(alimentos.id_alimento) ORDER by COUNT(favoritos.id_alimento) desc LIMIT 4');
        
        //$favorito_usuarios=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion,alimentos.precio,alimentos.calorias,alimentos.fotografia_miniatura from usuario inner join favoritos on usuario.id_usuario=favoritos.id_usuario inner join alimentos on alimentos.id_alimento=favoritos.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and usuario.id_usuario=13 LIMIT 6 ');
        
        if($buscar=='')
        {

            if($categoria!='')
            {
                 $alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion, alimentos.precio, alimentos.calorias,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.id_categoria=$categoria limit $valor,9");

                 $numero_platillos=DB::select("select count(*)as numero_platillos from alimentos where id_categoria=$categoria");
                 return view('/principal/index',compact('categorias','alimento_favoritos','alimentos','pagina','categoria','numero_platillos','buscar'));
            }
            else{
                 $alimentos=DB::select("SELECT alimentos.id_alimento, categoria.id_categoria, alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion, alimentos.precio, alimentos.calorias,alimentos.fotografia_miniatura FROM alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 limit $valor,9");

                 $numero_platillos=DB::select('select count(*)as numero_platillos from alimentos');
                 return view('/principal/index',compact('categorias','alimento_favoritos','alimentos','pagina','categoria','numero_platillos','buscar'));
            }
        }
        else{
            $categoria="''";
            $alimentos=DB::select("select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion,alimentos.precio,alimentos.calorias,alimentos.fotografia_miniatura from alimentos INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 and alimentos.nombre_alimento like '%$buscar%' limit $valor,9");
            $numero_platillos=DB::select("select count(*)as numero_platillos from alimentos where nombre_alimento like '%$buscar%'");
            return view('/principal/index',compact('categorias','alimento_favoritos','alimentos','pagina','categoria','numero_platillos','buscar'));
        }
    }
    
    
    function info_platillo()
    {
        $id_platillo="";
        $id_platillo=preg_replace('([^A-Za-z0-9 ])', '',$_GET['platillo']);
        try
        {       
            $info=DB::select('select * from alimentos inner join categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.id_alimento='.$id_platillo);

            //$imagenes=DB::select('select * from imagenes_de_muestra where id_alimento='.$id_platillo);
            $imagenes=DB::select('SELECT * FROM imagenes_de_muestra WHERE id_alimento= ?', [$id_platillo]);
            /*mas vendidos*/

            $vendidos=DB::select(' select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion
            ,alimentos.precio,alimentos.calorias,alimentos.fotografia_miniatura,COUNT(detalle_venta.id_alimento) as vendidos from detalle_venta RIGHT join
            alimentos on alimentos.id_alimento=detalle_venta.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where
            alimentos.eliminado=0 and alimentos.disponible=1 GROUP by(alimentos.id_alimento) ORDER by COUNT(detalle_venta.id_alimento) desc LIMIT 4');

            /*Ultimos comprados por el usuario*/
            /*$compras=DB::select('select alimentos.id_alimento,                       categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion,alimentos. precio,
            alimentos.calorias,alimentos.fotografia_miniatura from usuario inner join detalle_venta on usuario.id_usuario=detalle_venta.id_usuario inner join
            alimentos on alimentos.id_alimento=detalle_venta.id_alimento INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where
            alimentos.eliminado=0 and alimentos.disponible=1 and usuario.id_usuario=13 LIMIT 4; ');*/

           /* $ultimos=DB::select('select alimentos.id_alimento, categoria.id_categoria,alimentos.nombre_alimento,categoria.nombre_categoria,alimentos.tiempo_preparacion,alimentos.precio,alimentos.calorias,alimentos.fotografia_miniatura from alimentos INNER JOIN categoria on categoria.id_categoria=alimentos.id_categoria where alimentos.eliminado=0 and alimentos.disponible=1 ORDER by(alimentos.id_alimento) desc LIMIT 3');*/
            
            //Saber si el usuario esta logueado para obtener el 
            $id_usuario=13;
            $favoritos=DB::select('select favoritos.id_usuario, favoritos.id_alimento from favoritos where favoritos.id_usuario='.$id_usuario.' and favoritos.id_alimento='.$id_platillo);
            
             $ultimos=DB::select('select favoritos.id_usuario, favoritos.id_alimento from favoritos where favoritos.id_usuario='.$id_usuario.' and favoritos.id_alimento='.$id_platillo);
            
            $compras=DB::select('select favoritos.id_usuario, favoritos.id_alimento from favoritos where favoritos.id_usuario='.$id_usuario.' and favoritos.id_alimento='.$id_platillo);

            //return view('/principal/detalle_producto',compact('info','imagenes','vendidos','compras','ultimos','favoritos'));
            return view('/principal/detalle_producto',compact('info','imagenes','vendidos','favoritos','ultimos','compras'));
        }
        catch(Exception $e)
        {
            return redirect()->back();
        }   
    }
    
}
