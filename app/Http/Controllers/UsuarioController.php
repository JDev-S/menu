<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsuarioController extends Controller
{
    public function usuarios_mostrar()
	{
		$usuarios=DB::select('select usuario.id_usuario, rol.id_rol, rol.rol, usuario.nombre, usuario.apellidos, usuario.nombre_usuario, usuario.correo, usuario.contraseña, usuario.telefono, usuario.fecha_nacimiento, usuario.sexo from usuario inner join rol on rol.id_rol = usuario.id_rol');
          
		return view('/Administrador/Usuario/index',compact('usuarios'));
    }

	public function eliminar(Request $input)
    {
		$id_usuario=$input['id_usuario'];
        
		$query=DB::delete("update usuario set eliminado='1' WHERE id_usuario='$id_usuario'");
		return redirect()->action('UsuarioController@usuario_mostrar')->withInput();
	}
    
	public function insertar(Request $input)
	{
        $id_rol = $input['id_rol'];
        $nombre = $input['nombre'];
        $apellidos = $input['apellidos'];
        $nombre_usuario = $input['nombre_usuario'];
        $correo = $input['correo'];
        $contraseña = $input['contraseña'];
        $telefono = $input['telefono'];
        $fecha_nacimiento = $input['fecha_nacimiento'];
        $sexo = $input['sexo'];
        $eliminado = 0;
        
        $query=DB::insert('insert into usuario (id_usuario, id_rol, nombre, apellidos, nombre_usuario, correo, contraseña, telefono, fecha_nacimiento, sexo, eliminado) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [null, $id_rol, $nombre, $apellidos, $nombre_usuario, $correo, $contraseña, $telefono, $fecha_nacimiento, $sexo]);
        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}

	public function actualizar(Request $input)
	{	    
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
        $eliminado = 0;
        
        $id_alimento=$input['id_alimento'];
        $id_categoria = $input['id_categoria'];
        $nombre_alimento=$input['nombre_alimento'];
        $descripcion=$input['descripcion'];
        $fotografia_miniatura=$input['fotografia_miniatura'];
        $precio=$input['precio'];
        $eliminado=$input['eliminado'];
        
        $query=DB::update("update usuario set id_rol='$id_rol', nombre='$nombre', apellidos='$apellidos', nombre_usuario='$nombre_usuario', correo='$correo', contraseña='$contrasenia', telefono='$telefono, fecha_nacimiento='$fecha_nacimiento', sexo='$sexo' where id_usuario=?",[$id_usuario]);
        return redirect()->action('UsuarioController@usuarios_mostrar')->withInput();
	}
    
}