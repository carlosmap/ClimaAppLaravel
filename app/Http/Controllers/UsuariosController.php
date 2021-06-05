<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use DB;
use App\Usuarios;
use App\estados_usuarios;

class UsuariosController extends Controller
{
    public function index()
    {
    	$usuarios= Usuarios::get();
    	echo json_encode($usuarios);
    }

	/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $usuarios=new Usuarios();
        $usuarios->nombre_usuario = $request->input('nombre_usuario');
        $usuarios->apellido_usuario = $request->input('apellido_usuario');
        $usuarios->email_usuario = $request->input('email_usuario');
        $usuarios->password = $request->input('password');
        $usuarios->id_estado_usuario = $request->input('id_estado_usuario');
        $usuarios->id_perfil_usuario = $request->input('id_perfil_usuario');
        $usuarios->save();
    }

    public function update($idusuario)
    {

    }

    public function destroy($idusuario)
    {

    }

}
