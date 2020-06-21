<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsuarioController extends Controller
{
    public function usuarios_mostrar()
	{
		$usuarios=DB::select("select usuario.id_usuario,concat(usuario.nombre,' ',usuario.apellidos)as nombre_completo, rol.id_rol, rol.rol, usuario.nombre, usuario.apellidos, usuario.nombre_usuario, usuario.correo, usuario.contraseña, usuario.telefono, usuario.fecha_nacimiento, usuario.sexo from usuario inner join rol on rol.id_rol = usuario.id_rol where usuario.eliminado!=1");
          
		return view('/Administrador/Usuario/index',compact('usuarios'));
    }

	public function eliminar(Request $input)
    {
		$id_usuario=$input['id_usuario'];
        
		$query=DB::update("update usuario set eliminado='1' WHERE id_usuario='$id_usuario'");
		return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
    
     public function mostrar_insertar()
	{  
		return view('/Administrador/Usuario/insertar');
    }
    
	public function insertar(Request $input)
	{
        /*DATOS DEL USUARIO*/
        $id_rol = $input['id_rol'];
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contraseña = $input['contraseña'];
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        /*DATOS DE LAS DIRECCIONES*/
        $decidir_direccion=$input['disponible'];
        $persona_recibe=$input['persona_recibe'];
        $colonia=$input['colonia'];
        $calle=$input['calle'];
        $numero_interior=$input['numero_interior'];
        $numero_exterior=$input['numero_exterior'];
        $cp=$input['cp'];
        $referencia=$input['referencia'];
        $calleA=$input['calleA'];
        $calleB=$input['calleB'];
        $tel_casa=$input['tel_casa'];
        $eliminado = 0;
        
        //echo "aaaa".$decidir_direccion;
        if($id_rol==2)
        {
                if(empty($decidir_direccion))
            {
            //echo 'no se selecciono';
             $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $contraseña, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
            return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
                    
            }
            else
            {
                //echo ' se selecciono';
                $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $contraseña, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
            
                /*INGRESAR EN DIRECCIONES*/
                $id_usuarios=DB::select('select id_usuario from usuario order by id_usuario desc limit 1');
                $id=$id_usuarios[0]->id_usuario;
                
                
                $query2=DB::insert('INSERT INTO direccion (id_direccion, id_usuario, persona_recibe, colonia, calle, numero_interior, numero_exterior, cp, referencia, calleA, calleB, telefono, eliminado) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id, $persona_recibe, $colonia, $calle, $numero_interior, $numero_exterior, $cp, $referencia, $calleA, $calleB, $tel_casa, $eliminado]);
                return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
               
                
            }
        }
        else
        {
              $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $contraseña, $telefono, $fecha_nacimiento, $sexo, $eliminado]);
            return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
        }
        
	}

     public function mostrar_actualizar()
	{
        $id=$_GET['usuario'];
        $usuarios=DB::select("select * from usuario inner join rol on rol.id_rol = usuario.id_rol where usuario.id_usuario=$id");

		return view('/Administrador/Usuario/actualizar',compact('usuarios'));
    }
    
	public function actualizar(Request $input)
	{	    
        var_dump($input->id_usuario);
        
        $id_usuario = $input['id_usuario'];
        $id_rol = $input['id_rol'];
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contrasenia = $input['contraseña'];
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        $eliminado =$input['eliminado'];
        
        
        $query=DB::update("update usuario set id_rol='$id_rol', nombre='$nombre', apellidos='$apellidos', nombre_usuario='$nombre_usuario', correo='$correo', contraseña='$contrasenia', telefono='$telefono', fecha_nacimiento='$fecha_nacimiento', sexo='$sexo' where id_usuario=?",[$id_usuario]);
        
        
        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
    
}