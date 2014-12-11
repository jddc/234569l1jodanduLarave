<?php 
class UsuariosController extends BaseController{
    
    public function mostrarUsuarios(){
        $usuarios = Usuario::all();
        return View::make('usuario.lista',array('usuarios'=>$usuarios));
    }

    public function crearUsuario(){
        Usuario::create(Input::all());
        return Redirect::to('usuarios');
    }

    public function verUsuario($id){
        $usuario = Usuario::find($id);
        return View::make('usuarios.ver',array('usuario' => $usuario));
    }
}

 ?>